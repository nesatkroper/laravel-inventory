<?php

use App\Http\Controllers\app\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\app\CountController@count')->name('/');

Route::resource('emp', 'App\Http\Controllers\app\EmployeeController');
