<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('auth.login');
});

//HomeController
Route::get('home', [HomeController::class, 'index'])->name('home');

//ProfileController
Route::get('profile', ProfileController::class)->name('profile');

//EmployeeController
Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

