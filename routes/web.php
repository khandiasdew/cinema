<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\filmController;
use Illuminate\Support\Facades\Route;

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
    return view('ui.ui');
});
Route::resource('film', filmController::class);
Route::get('/film/{film}/delete' , [filmController::class , 'delete']);
Route::resource('booking', bookingController::class);
Route::get('/booking/{booking}/delete' , [bookingController::class , 'delete']);
Route::resource('booking', bookingController::class);
Route::get('/admin/{admin}/delete' , [adminController::class , 'delete']);
Route::resource('admin', adminController::class);
    // Route::get('/member/{member}/delete' , [MemberController::class , 'delete']);
    // Route::resource('member', MemberController::class);

