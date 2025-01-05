<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\QuizController;

// Rute untuk menampilkan halaman kuis
Route::get('/quiz/{index}', [QuizController::class, 'showQuiz'])->name('quiz');

// Rute untuk menyimpan jawaban dan navigasi
Route::post('/quiz/{index}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');

Route::get('/result', [QuizController::class, 'showResult'])->name('result');