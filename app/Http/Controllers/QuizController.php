<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $quizQuestions;

    public function __construct()
    {
        // Load quiz questions from the config file
        $this->quizQuestions = config('quiz_questions');
    }

    public function showQuiz($level, $index)
    {
        $filteredQuestions = array_filter($this->quizQuestions, fn($quiz) => $quiz['level'] == $level);
        $questionsForLevel = array_values($filteredQuestions);

        if ($index < 0 || $index >= count($questionsForLevel)) {
            return redirect()->route('quiz.submit', ['level' => $level, 'index' => 0]);
        }

        $quiz = $questionsForLevel[$index];

        return view("pages.quiz.quiz", [
            'quiz' => $quiz,
            'index' => $index,
            'totalQuestions' => count($questionsForLevel),
            'level' => $level,
        ]);
    }
    
    

public function submitQuiz(Request $request, $level, $index)
{
    // Simpan jawaban ke session
    $answer = $request->input('answer');
    session()->put("answers.$level.$index", $answer);
    
    // Ambil nilai nextIndex dari request
    $nextIndex = $request->input('next_index');
    
    // Jika nextIndex adalah 'result', langsung menampilkan halaman hasil
    if ($nextIndex === 'result') {
        return $this->showResult($level);  // Menampilkan hasil langsung tanpa redirect
    }
    
    // Ambil pertanyaan berikutnya dan tampilkan
    return $this->showQuiz($level, $nextIndex);  // Menampilkan soal berikutnya tanpa redirect
}


// Metode untuk menampilkan hasil kuis sesuai level
public function showResult($level)
{
    // Ambil semua pertanyaan untuk level yang sesuai
    $quizQuestions = array_filter($this->quizQuestions, fn($quiz) => $quiz['level'] == $level);
    $quizQuestions = array_values($quizQuestions); // Menyusun ulang array

    // Ambil jawaban dari sesi
    $answers = session("answers.$level", []);
    
    // Menghitung skor
    $correct = 0;
    $incorrect = 0;
    $unanswered = count($quizQuestions);

    foreach ($quizQuestions as $index => $question) {
        if (isset($answers[$index])) {
            $unanswered--; // Mengurangi jumlah soal yang tidak dijawab
            if ($answers[$index] === $question['answer']) {
                $correct++;
            } else {
                $incorrect++;
            }
        }
    }

    $totalQuestions = count($quizQuestions);
    $percentage = ($correct / $totalQuestions) * 100;

    // Menentukan view yang sesuai berdasarkan level dan mengirimkan variabel level
    return view("pages.result.result", [
        'correct' => $correct,
        'incorrect' => $incorrect,
        'unanswered' => $unanswered,
        'score' => $correct,
        'totalQuestions' => $totalQuestions,
        'percentage' => $percentage,
        'level' => $level,  // Pastikan level dikirim ke view
    ]);
}
}

