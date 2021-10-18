<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == "admin"){
                $user = DB::table('users')->count();
                $transaction = DB::table('transactions')->where('status', false)->get();
                $total_transaction = DB::table('transactions')->where('status', false)->sum('amount');
                $credit = DB::table('transactions')->where('type', 'credit')->where('status', false)->sum('amount');
                $debit = DB::table('transactions')->where('type', 'debit')->where('status', false)->sum('amount');

                return view('home', compact('user', 'total_transaction', 'credit', 'debit'));
            }
            else{
                return redirect()->route('users.dashboard');
            }
        }
        else{
            return redirect()->route('login');
        }
    }

    public function usersIndex(){

        $account = DB::table('user_accounts')->where('user_id', Auth::user()->uid)->first();
        dd($account);
        $transaction = DB::table('transactions')->where('uid', Auth::user()->uid)->where('status', false)->latest()->get();
        $total_transaction = DB::table('transactions')->where('uid', Auth::user()->uid)->where('status', false)->sum('amount');
        $credit = DB::table('transactions')->where('type', 'credit')->where('uid', Auth::user()->uid)->where('status', false)->sum('amount');
        $debit = DB::table('transactions')->where('type', 'debit')->where('uid', Auth::user()->uid)->where('status', false)->sum('amount');
        $credit_percentage = ($total_transaction != 0) ? ($credit/$total_transaction)*100 : 0;

        $debit_percentage = ($total_transaction != 0) ? ($debit/$total_transaction)*100 : 0;
        return view('users.dashboard', compact('account', 'transaction', 'credit_percentage', 'debit_percentage'));
    }

    public function settings()
    {
        $setting = Setting::where('id', 1)->first();
        return view('admin.settings', compact('setting'));
    }

    public function transferSettings(){
       $setting = Setting::where('id', 1)->first();
       $setting->transfer = !$setting->transfer;
       $setting->save();

       if($setting->transfer)
       {
           Alert::success('Transfer error activated');
       }
       else{
           Alert::success('Transfer error deactivated');
       }
       return redirect()->back();
    }

    public function daily_limit(){
        $setting = Setting::where('id', 1)->first();
        $setting->transfer_limit = !$setting->transfer_limit;
        $setting->save();

        if($setting->transfer_limit)
        {
            Alert::success('Limit error activated');
        }
        else{
            Alert::success('Limit error deactivated');
        }
        return redirect()->back();
     }


}
