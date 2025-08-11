<?php

use Illuminate\Support\Facades\Route;

// homepage route
Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\LetterController; // so Laravel know where to look for LetterController

// Route to show the "write letter to God" form
Route::get('/write', [LetterController::class, 'create']); // the /write route maps to the create() method inside LetterController

Route::post('/write', [LetterController::class, 'store']);

use Illuminate\Http\Request;

Route::get('/after-letter-msg/{id}', [LetterController::class, 'afterLetterMsg'])->name('after-letter-msg');

Route::get('/letters', [LetterController::class, 'index']);
