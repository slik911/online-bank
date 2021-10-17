<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(){
       $accounts = DB::table('user_accounts')
                    ->select('user_accounts.*', 'users.name as name', 'users.email as email', 'users.status as status')
                    ->leftjoin('users', 'users.uid', 'user_accounts.user_id')
                    ->latest()->get();
       return view('admin.userAccounts', compact('accounts'));
    }

    public function getUser(Request $request){
        $account = DB::table('user_accounts')
                ->select('user_accounts.*', 'users.name as name', 'users.email as email', 'users.status as status')
                ->leftjoin('users', 'users.uid', 'user_accounts.user_id')
                ->where('user_accounts.id', $request->id)->first();

        return response()->json($account);
    }
}
