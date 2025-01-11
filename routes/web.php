<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\QuizController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/pages/homepage/home');
});

Route::get('/anatomy', function () {
    return view('/pages/anatomy/anatomy');
});

// Rute untuk menampilkan halaman kuis
Route::get('/quiz/{index}', [QuizController::class, 'showQuiz'])->name('quiz');

// Rute untuk menyimpan jawaban dan navigasi
Route::post('/quiz/{index}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');

Route::get('/result', [QuizController::class, 'showResult'])->name('result');