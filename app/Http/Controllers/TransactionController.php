<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public static function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }


    public function debit(Request $request){
        $user = DB::table('users')->where('uid', Auth::user()->uid)->first();
        if(Hash::check($request->pin, $user->pin)){
            if(Auth::user()->role == 'user'){
                if(DB::table('settings')->where('id', 1)->where('transfer', true)->exists()){
                    Alert::Warning('Kyc and Tax Payment Verification Required');
                    return redirect()->back();
                }
                else{
                    if(DB::table('settings')->where('id', 1)->where('transfer_limit', true)->exists()){
                        Alert::error('Transfer Limit Exceeded');
                        return redirect()->back();
                    }
                    else{
                        $validator = Validator::make($request->all(), [
                            'amount'=> 'required',
                            'beneficiary_name' => 'required',
                            'account_number'=> 'required',
                            'bank' => 'required',
                            'narration' => 'nullable',
                            'pin' => 'required',
                        ]);
                        if($validator->fails()){
                            $request->session()->flash('errors', $validator->errors());
                            return redirect()->back();
                        }
                        else{
                            $account = DB::table('user_accounts')
                                            ->select('user_accounts.*', 'users.name as name', 'users.email as email', 'users.status as status')
                                            ->leftjoin('users', 'users.uid', 'user_accounts.user_id')
                                            ->where('user_accounts.user_id', Auth::user()->uid)->first();

                            if($account->balance > $request->amount){
                                $new_bal = $account->balance - (int)$request->amount;

                                if( DB::table('user_accounts')->where('user_id', $request->uid)->update(['balance'=>$new_bal, 'updated_at'=>Carbon::now()])){
                                    $saveTransaction = DB::table('transactions')->insert([
                                        'uid'=> $request->uid,
                                        'type'=> 'debit',
                                        'ref' => self::random_strings(15),
                                        'account_name' => $account->name,
                                        'account_number' => $account->account_number,
                                        'beneficiary_bank' => $request->bank,
                                        'beneficiary' => $request->beneficiary_name,
                                        'beneficiary_account' => $request->account_number,
                                        'amount' => $request->amount,
                                        'narration' => $request->narration,
                                        'date' => Carbon::parse($request->date),
                                        'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now(),
                                    ]);

                                    if($saveTransaction){
                                        Alert::success('Transaction Successful');
                                            return redirect()->back();
                                    }
                                    else{
                                        Alert::success('Error just occured, please try again');
                                        return redirect()->back();
                                    }
                                }
                                else{
                                    Alert::success('Error just occured, please try again');
                                    return redirect()->back();
                                }
                            }
                            else{
                                Alert::error('Insufficient Balance');
                                return redirect()->back();
                            }
                        }
                    }
                }
            }
            else{
                /// for admin

                $account = DB::table('user_accounts')
                        ->select('user_accounts.*', 'users.name as name', 'users.email as email', 'users.status as status')
                        ->leftjoin('users', 'users.uid', 'user_accounts.user_id')
                        ->where('user_accounts.user_id', $request->uid)->first();

                    if($account->balance > $request->amount){
                        $new_bal = $account->balance - (int)$request->amount;

                        if( DB::table('user_accounts')->where('user_id', $request->uid)->update(['balance'=>$new_bal, 'updated_at'=>Carbon::now()])){
                            $saveTransaction = DB::table('transactions')->insert([
                                'uid'=> $request->uid,
                                'type'=> 'debit',
                                'ref' => self::random_strings(15),
                                'account_name' => $account->name,
                                'account_number' => $account->account_number,
                                'beneficiary_bank' => $request->bank,
                                'beneficiary' => $request->name,
                                'beneficiary_account' => $request->account_number,
                                'amount' => $request->amount,
                                'narration' => $request->narration,
                                'date' => Carbon::parse($request->date),
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ]);

                            if($saveTransaction){
                                Alert::success('Transaction Successful');
                                    return redirect()->back();
                            }
                            else{
                                Alert::success('Error just occured, please try again');
                                return redirect()->back();
                            }
                        }
                        else{
                            Alert::error('Error just occured, please try again');
                            return redirect()->back();
                        }

                    }
                    else{
                        Alert::error('Insufficient Balance');
                        return redirect()->back();
                    }
                //end admin
            }
        }
        else{
            Alert::error('Incorrect Pin');
            return redirect()->back();
        }
    }

    public function transfer(Request $request){
        $saveTransaction = DB::table('transactions')->insert([
                            'uid'=> $request->uid,
                            'type'=> 'credit',
                            'ref' => self::random_strings(15),
                            'account_name' => $request->account_name,
                            'account_number' => $request->account_number,
                            'beneficiary_bank' => 'HSB',
                            'beneficiary' => $request->credit_name,
                            'beneficiary_account' => $request->credit_account_number,
                            'amount' => $request->amount,
                            'narration' => $request->narration,
                            'date' => Carbon::parse($request->date),
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
        if($saveTransaction){
           $account = DB::table('user_accounts')->where('user_id', $request->uid)->first();
           $new_bal = $account->balance + (int)$request->amount;
           if( DB::table('user_accounts')->where('user_id', $request->uid)->update(['balance'=>$new_bal, 'updated_at'=>Carbon::now()])){
               Alert::success('Transaction Successful');
           }
           else{
            Alert::error('Error just cccured, please try again');
           }
           return redirect()->back();
        }

    }


    public function transactionHistory($uid){
       $transactions = DB::table('transactions')->orderBy('id', 'desc')->get();
       return view('admin.transactionHistory', compact('transactions'));
    }

    public function TransactionStatus(Request $request){
        $transaction = Transaction::where('id', $request->id)->first();
        $transaction->status = !$transaction->status;
        $transaction->save();

        Alert::success('Transaction status updated');
        return redirect()->back();
    }

    public function transferFund(){
        $transaction = DB::table('transactions')->where('uid', Auth::user()->uid)->where('status', false)->latest()->get();
        $account = DB::table('user_accounts')->where('user_id', Auth::user()->uid)->first();

        return view('users.transfer', compact('transaction', 'account'));
    }
}
