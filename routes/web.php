<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/send-mail', [App\Http\Controllers\HomeController::class, 'sendmail'])->name('email.send');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'blacklisted');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index')->middleware('auth', 'blacklisted');

Route::post('/change/user/pin', [App\Http\Controllers\UserController::class, 'updatePin'])->name('pin.change')->middleware('user');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'usersIndex'])->name('users.dashboard')->middleware('user', 'blacklisted');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('/users', [App\Http\Controllers\UserController::class, 'users'])->name('users')->middleware('admin');
Route::post('/register/users', [App\Http\Controllers\UserController::class, 'createUser'])->name('register.users')->middleware('admin');
Route::get('/edit/users', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.user')->middleware('admin');
Route::post('/change/user/status', [App\Http\Controllers\UserController::class, 'changeUserStatus'])->name('change_user_status')->middleware('admin');

Route::post('/change/user/profile', [App\Http\Controllers\UserController::class, 'updateUserProfile'])->name('update.profile')->middleware('admin');
Route::post('/change/user/password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('password.change')->middleware('admin');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('account.settings')->middleware('admin');
Route::get('/settings/transfer', [App\Http\Controllers\HomeController::class, 'transferSettings'])->name('transfer.settings')->middleware('admin');
Route::get('/settings/daily_limit', [App\Http\Controllers\HomeController::class, 'daily_limit'])->name('daily.limit')->middleware('admin');


Route::get('/accounts/users', [App\Http\Controllers\AccountController::class, 'index'])->name('accounts')->middleware('admin');
Route::get('/get/users/account', [App\Http\Controllers\AccountController::class, 'getUser'])->name('get.user')->middleware('admin');

Route::post('/transfer/funds', [App\Http\Controllers\TransactionController::class, 'transfer'])->name('transfer');
Route::get('/transaction/history/{uid}', [App\Http\Controllers\TransactionController::class, 'transactionHistory'])->name('transaction.history');

Route::get('/transaction/status/{id}', [App\Http\Controllers\TransactionController::class, 'transactionStatus'])->name('transaction.status');
Route::post('/debit/funds', [App\Http\Controllers\TransactionController::class, 'debit'])->name('debit')->middleware('auth');
Route::get('/create/new/users', [App\Http\Controllers\UserController::class, 'create'])->name('create.users')->middleware('admin');
Route::get('/transfer/users', [App\Http\Controllers\TransactionController::class, 'transferFund'])->name('transfer.funds')->middleware('user');
Route::get('/loans', [App\Http\Controllers\OtherController::class, 'loans'])->name('loans')->middleware('user');
Route::get('/loans/application/{loan_type}', [App\Http\Controllers\OtherController::class, 'loans_process'])->name('loan.process')->middleware('user');
Route::get('/cheques_and_card', [App\Http\Controllers\OtherController::class, 'card'])->name('card')->middleware('user');
Route::get('/cheques_and_card/application/{card_type}', [App\Http\Controllers\OtherController::class, 'card_process'])->name('card.process')->middleware('user');
Route::post('/cheques_and_card/application/request/submit', [App\Http\Controllers\OtherController::class, 'card_submit'])->name('card.submit')->middleware('user');
Route::get('/contact/support', [App\Http\Controllers\OtherController::class, 'support'])->name('support')->middleware('user');
Route::post('/contact/support', [App\Http\Controllers\OtherController::class, 'support_save'])->name('support.save')->middleware('user');
