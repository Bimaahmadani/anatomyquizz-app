<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('/pages/homepage/home');
});

Route::get('/anatomy', function () {
    return view('/pages/anatomy/anatomy');
});

Route::get('/about', function () {
    return view('/pages/about/about');
});

Route::get('/pilih', function () {
    return view('/pages/chooselevel/choose');
});

Route::get('/quiz/{level}/{index}', [QuizController::class, 'showQuiz'])->name('quiz');
Route::post('/quiz/{level}/{index}', [QuizController::class, 'submitQuiz'])->name('quiz.submit');
Route::get('/result/{level}', [QuizController::class, 'showResult'])->name('result');



