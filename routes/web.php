<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\watermark;

Route::get('/', function () {
    return view('welcome');
}); 
Route::any('ard/', [watermark::class, 'ard'])->name('ard');

