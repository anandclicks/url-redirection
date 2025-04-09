<?php

use App\Http\Controllers\handleUrls;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


