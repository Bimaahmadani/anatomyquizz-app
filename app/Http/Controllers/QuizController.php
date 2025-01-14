<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $quizQuestions = [
        [
            'level' => 1,
            'question' => 'Apa ibu kota Indonesia?',
            'options' => ['Jakarta', 'Surabaya', 'Bandung', 'Medan'],
            'answer' => 'Jakarta',
        ],
        [
            'level' => 1,
            'question' => 'Siapa penemu bola lampu?',
            'options' => ['Thomas Edison', 'Nikola Tesla', 'Alexander Graham Bell', 'Michael Faraday'],
            'answer' => 'Thomas Edison',
        ],
        [
            'level' => 1,
            'question' => 'Apa planet terbesar di tata surya?',
            'options' => ['Mars', 'Jupiter', 'Saturnus', 'Bumi'],
            'answer' => 'Jupiter',
        ],
        [
            'level' => 2,
            'question' => 'Siapa presiden pertama Republik Indonesia?',
            'options' => ['Sukarno', 'Suharto', 'BJ Habibie', 'Megawati Soekarnoputri'],
            'answer' => 'Sukarno',
        ],
        [
            'level' => 2,
            'question' => 'Dalam ilmu anatomi, tulang apa yang melindungi otak manusia?',
            'options' => ['Tulang tengkorak', 'Tulang rusuk', 'Tulang belakang', 'Tulang paha'],
            'answer' => 'Tulang tengkorak',
        ],
        [
            'level' => 2,
            'question' => 'Siapa penulis novel Laskar Pelangi?',
            'options' => ['Andrea Hirata', 'J.K. Rowling', 'Tere Liye', 'Dewi Lestari'],
            'answer' => 'Andrea Hirata',
        ],
        [
            'level' => 3,
            'question' => 'Apa nama ilmiah dari air?',
            'options' => ['H2O', 'O2', 'CO2', 'CH4'],
            'answer' => 'H2O',
        ],
        [
            'level' => 3,
            'question' => 'Siapa penemu teori relativitas?',
            'options' => ['Albert Einstein', 'Isaac Newton', 'Nikola Tesla', 'Galileo Galilei'],
            'answer' => 'Albert Einstein',
        ],
        [
            'level' => 3,
            'question' => 'Apa hukum Newton yang pertama?',
            'options' => ['Hukum Inersia', 'Hukum Aksi Reaksi', 'Hukum Gravitasi', 'Hukum Percepatan'],
            'answer' => 'Hukum Inersia',
        ],
    ];

    // Metode untuk menampilkan halaman kuis
    public function showQuiz($level, $index)
    {
        // Validate and process the quiz questions based on level and index
        $filteredQuestions = array_filter($this->quizQuestions, fn($quiz) => $quiz['level'] == $level);
        $questionsForLevel = array_values($filteredQuestions);
    
        if ($index < 0 || $index >= count($questionsForLevel)) {
            return redirect()->route('quiz.submit', ['level' => $level, 'index' => 0]);
        }
    
        // Fetch the relevant quiz question based on level and index
        $quiz = $questionsForLevel[$index];
    
        return view("pages.quiz.quiz{$level}", [
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
    return view("pages.result.result{$level}", [
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

