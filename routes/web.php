<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

// 1. Home page (Form eka pennanna)
Route::get('/', [MessageController::class, 'create']);

// 2. Data save karanna
Route::post('/send-message', [MessageController::class, 'store']);

// 3. Messages list eka balanna
Route::get('/messages', [MessageController::class, 'index']);
    
