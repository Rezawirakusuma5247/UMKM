<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', [Controller::class,'welcome'])->name('welcome');

Route::get('/', [Controller::class,'welcome'])->name('welcome');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login-proses', [LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/register-proses', [LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin','middleware' => ['auth','can:admin'] ,'as' => 'admin.'], function(){
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/admin-dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'event','middleware' => ['auth'],'as' => 'event.'], function(){
Route::get('/events', [EventController::class, 'index'])->name('index');
Route::get('/events/create', [EventController::class, 'create'])->name('create');
Route::post('/events', [EventController::class, 'store'])->name('store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('update');
Route::get('/events/{id}', [EventController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [EventController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'apa','middleware' => ['auth'],'as' => 'apa.'], function(){
    Route::get('/Home', [UmkmController::class,'welcome'])->name('welcome');
    Route::get('/Sent',[UmkmController::class,'thanks'])->name('thanks');
});

Route::group(['prefix' => 'regis','middleware' => ['auth'],'as' => 'regis.'], function(){
    Route::get('/regis', [RegistrationController::class, 'index'])->name('regis.index');
    Route::get('/Form-r/{id}', [RegistrationController::class, 'form_r'])->name('form-registrasi');
    Route::post('/store-r', [RegistrationController::class, 'store_r'])->name('store-registrasi');
    Route::get('/registrations/{id}/approve', [RegistrationController::class, 'approve'])->name('approve');
    Route::get('/registrations/list', [RegistrationController::class, 'list'])->name('regis.list');
    Route::delete('/delete/{id}', [RegistrationController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'umkm','middleware' => ['auth'],'as' => 'umkm.'], function(){
    //Profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::match(['put', 'patch'], '/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'lina','middleware' => ['auth'],'as' => 'lina.'], function(){
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us.index');
    Route::get('/contact-us/create', [ContactUsController::class, 'create'])->name('contact-us.create');
    Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('contact-us.store');
    Route::delete('/contact-us/{id}/delete', [ContactUsController::class, 'destroy'])->name('contact-us.destroy');
});



