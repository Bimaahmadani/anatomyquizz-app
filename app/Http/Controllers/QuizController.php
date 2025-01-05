<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $quizQuestions = [
        [
            'question' => 'Apa ibu kota Indonesia?',
            'options' => ['Jakarta', 'Surabaya', 'Bandung', 'Medan'],
            'answer' => 'Jakarta',
        ],
        [
            'question' => 'Siapa penemu bola lampu?',
            'options' => ['Thomas Edison', 'Nikola Tesla', 'Alexander Graham Bell', 'Michael Faraday'],
            'answer' => 'Thomas Edison',
        ],
        [
            'question' => 'Apa planet terbesar di tata surya?',
            'options' => ['Mars', 'Jupiter', 'Saturnus', 'Bumi'],
            'answer' => 'Jupiter',
        ],
    ];

    // Metode untuk menampilkan halaman kuis
    public function showQuiz($index)
    {
        if ($index < 0 || $index >= count($this->quizQuestions)) {
            return redirect()->route('quiz', ['index' => 0]);
        }

        return view('quiz', [
            'quiz' => $this->quizQuestions[$index],
            'index' => $index,
            'totalQuestions' => count($this->quizQuestions),
        ]);
    }

    // Metode untuk menyimpan jawaban dan navigasi
    public function submitQuiz(Request $request, $index)
    {
        $answer = $request->input('answer');
        session()->put("answers.$index", $answer);

        $nextIndex = $request->input('next_index');
        if ($nextIndex === 'result') {
            return redirect()->route('result');
        }

        return redirect()->route('quiz', ['index' => $nextIndex]);
    }


    public function showResult()
{
    $quizQuestions = $this->quizQuestions; // Ambil data pertanyaan kuis
    $answers = session('answers', []);    // Ambil jawaban dari sesi

    $correct = 0;
    $incorrect = 0;
    $unanswered = count($quizQuestions);

    // Perhitungan skor
    foreach ($quizQuestions as $index => $question) {
        if (isset($answers[$index])) {
            $unanswered--; // Kurangi jumlah tidak dijawab
            if ($answers[$index] === $question['answer']) {
                $correct++;
            } else {
                $incorrect++;
            }
        }
    }

    $totalQuestions = count($quizQuestions);
    $percentage = ($correct / $totalQuestions) * 100;

    return view('result', [
        'correct' => $correct,
        'incorrect' => $incorrect,
        'unanswered' => $unanswered,
        'score' => $correct,
        'totalQuestions' => $totalQuestions,
        'percentage' => $percentage,
    ]);
}

}
