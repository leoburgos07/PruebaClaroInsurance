<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;


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
    return view('/auth/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Mail routes
Route::get('/createEmail',[App\Http\Controllers\HomeController::class, 'createMail']);
Route::post('/createEmail',[App\Http\Controllers\HomeController::class, 'sendMail']);
Route::get('/listEmails/{id}',[App\Http\Controllers\HomeController::class, 'listMails']);
Route::get('/showEmail/{id}',[App\Http\Controllers\HomeController::class, 'showMail']);

//admmin routes
Route::get('/admin/userList',[App\Http\Controllers\Admincontroller::class, 'index']);
Route::get('/admin/createUser',[App\Http\Controllers\Admincontroller::class, 'create']);
Route::post('/admin/createUser',[App\Http\Controllers\Admincontroller::class, 'store']);
Route::get('/admin/editUser/{user}',[App\Http\Controllers\Admincontroller::class, 'edit']);
Route::post('/admin/editUser/{id}',[App\Http\Controllers\Admincontroller::class, 'update']);
Route::get('/admin/deleteUser/{user}',[App\Http\Controllers\Admincontroller::class, 'delete']);
Route::get('/admin/cities/{id}',[App\Http\Controllers\Admincontroller::class, 'getCities']);


