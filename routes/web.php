<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VecinoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('vecinos', VecinoController::class);
