<?php

namespace Database\Seeders;

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
    public function run()
    {
        $data = [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'uid' => Hash::make('admin@gmail.com'),
            'password' => Hash::make('password'),
            'phone_number' => '+2348107215634',
            'role' =>'admin',
            'pin' => Hash::make('2524')
        ];

        DB::table('goal_savings_set')->insert($data);
    }
}
