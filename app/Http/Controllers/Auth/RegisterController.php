<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required'],
            'role' => ['nullable'],
        ]);
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
    protected function create(array $data)
    {
        $uid = Hash::make($data['email']);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'uid' => self::random_strings2(100),
            'password' => Hash::make($data['password']),
            'phone' => $data['phone_number'],
            'role' => $data['role']
        ]);

        DB::table('user_accounts')->insert(['user_id'=>$uid, 'account_number'=>self::random_strings(10), 'balance'=> 0]);

        return $user;
    }
}
