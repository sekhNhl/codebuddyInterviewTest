<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdmindataController;


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
Route::get('registrationForm',[RegistrationController::class,'index'])->name('registrationForm');
Route::post('regd_data',[RegistrationController::class,'regd_data'])->name('regd_data');
Route::get('login',[RegistrationController::class,'login'])->name('login');
Route::post('login_form',[LoginController::class,'login_form'])->name('login_form');
Route::get('/dashoboard_admin',[LoginController::class,'dashboard_admin'])->name('dashboard_admin')->middleware('LoginMiddleware');
Route::get('/dashoboard_user',[LoginController::class,'dashboard_user'])->name('dashoboard_user')->middleware('LoginMiddleware');

Route::post('save_Data',[AdmindataController::class,'save_data'])->name('save_data');


