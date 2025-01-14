<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\QuizController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('\pages\homepage\home');
});

Route::get('/anatomy', function () {
    return view('\pages\anatomy\anatomy');
});

Route::get('/preview', function () {
    return view('\pages\preview\preview1');
});

Route::get('/preview2', function () {
    return view('\pages\preview\preview2');
});

Route::get('/preview3', function () {
    return view('\pages\preview\preview3');
});

// // Rute untuk menampilkan halaman kuis
// Route::get('/quiz/{index}', [QuizController::class, 'showQuiz'])->name('quiz');
// // Rute untuk menyimpan jawaban dan navigasi
// Route::post('/quiz/{index}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');

// Route::get('/result', [QuizController::class, 'showResult'])->name('result');

// Rute untuk menampilkan halaman kuis berdasarkan level dan index
Route::get('/quiz/{level}/{index}', [QuizController::class, 'showQuiz'])->name('quiz');
Route::post('/quiz/{level}/{index}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
Route::get('/result/{level}', [QuizController::class, 'showResult'])->name('result');



