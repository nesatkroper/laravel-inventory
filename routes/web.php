<?php

use App\Http\Controllers\app\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

Route::resource('employee', 'App\Http\Controllers\app\EmployeeController');
