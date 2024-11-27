<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\watermark;


Route::any('/', [watermark::class, 'ard'])->name('ard');

