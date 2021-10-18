<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected static function random_strings($length_of_string)
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqurtuvwxyz&';
        return substr(str_shuffle($str_result), 0, $length_of_string);
    }

    public function run()
    {
        $data = [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'uid' => self::random_strings(100),
            'password' => Hash::make('password'),
            'phone_number' => '+2348107215634',
            'role' =>'admin',
            'pin' => Hash::make('2524'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        DB::table('users')->insert($data);
    }
}
