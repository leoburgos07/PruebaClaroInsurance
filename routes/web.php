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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admmin routes
Route::get('/admin/userList',[App\Http\Controllers\Admincontroller::class, 'index']);
Route::get('/admin/createUser',[App\Http\Controllers\Admincontroller::class, 'create']);
Route::post('/admin/createUser',[App\Http\Controllers\Admincontroller::class, 'store']);
Route::get('/admin/editUser/{id}',[App\Http\Controllers\Admincontroller::class, 'edit']);
Route::get('/admin/cities/{id}',[App\Http\Controllers\Admincontroller::class, 'getCities']);


