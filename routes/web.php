<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;


Route::get('/index', [homeController::class, 'index']);
