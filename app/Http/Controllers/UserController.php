<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function users(){
        $users = DB::table('users')->latest()->cursor();
        return view('admin.users', compact('users'));
    }

    public function profile(){

        return view('profile');
    }

    public function create(){
        return view('admin.createUsers');
    }

    public function edit(Request $request){
        $user = DB::table('users')->where('uid', $request->uid)->first();

        return view('admin.editUserInfo', compact('user'));
    }



    public function changeUserStatus($uid){
        $user = User::where('uid', $uid)->first();
        $user->status = !$user->status;
        $user->save();

        Alert::success('User status updated');
        // $request->session()->flash('success', 'User status updated');
        return redirect()->back();
    }

    public function updateUserProfile(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);
        if($validator->fails()){
            $request->session()->flash('errors', $validator->errors());
            return redirect()->back();
        }
        else{
            $users = User::where('uid', $request->uid)->first();
            $users->name = $request->name;
            $users->phone_number = $request->phone_number;
            $users->save();

            if($users)
            {
                Alert::success( 'Changes saved successfully');
            return redirect()->back();
            }
            else{
                Alert::error( 'Unable to save changes');
                return redirect()->back();
            }

        }
    }
    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed',
        ]);
        if($validator->fails()){
            $request->session()->flash('errors', $validator->errors());
            return redirect()->back();
        }
        else{
            $users = DB::table('users')->where('uid', $request->uid)->update(['password'=>bcrypt($request->password)]);
            if($users)
            {
                Alert::success( 'Password Updated');
            return redirect()->back();
            }
            else{
                Alert::error( 'Unable to save changes');
                return redirect()->back();
            }

        }
    }

    public function updatePin(Request $request){
        $validator = Validator::make($request->all(), [
            'pin' => 'required',
        ]);

        if($validator->fails()){
            $request->session()->flash('errors', $validator->errors());
            return redirect()->back();
        }
        else{
            $users = DB::table('users')->where('uid', $request->uid)->first();

            if(Hash::check($request->oldpin, $users->pin))
            {
                DB::table('users')->where('uid', $request->uid)->update(['pin'=> Hash::make($request->pin)]);
                Alert::success( 'Pin Updated');
                return redirect()->back();
            }
            else{
                Alert::error( 'Incorrect Pin');
                return redirect()->back();
            }

        }
    }


    protected static function random_strings($length_of_string)
    {
        $str_result = '0123456789';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    protected static function random_strings2($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqurtuvwxyz&';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function createuser(Request $request)
    {
        // dd('ok');
       $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required',
            'pin' => 'required|max:4',
            'role' => 'nullable',
        ]);
        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }
        else{
            $uid = Hash::make($request->email);
            // dd($uid);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'uid' => self::random_strings2(100),
                'password' => Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'role' =>$request->role,
                'pin' => Hash::make($request->pin),
                'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()
            ]);

            DB::table('user_accounts')->insert(['user_id'=>$uid, 'account_number'=>self::random_strings(10), 'balance'=> 0, 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
            Alert::success('New user created');
            return redirect()->route('users');
        }



    }

    public function sendmail(Request $request){
        $details = (array) $request->all();
        Mail::to("support@turkiyekredibank.com")->send(new contactMail($details));

        Alert::success('Message sent');
        return redirect()->back();
    }

}
