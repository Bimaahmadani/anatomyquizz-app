<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
    <title>Kuis Sederhana</title>
</head>
<body class="bg-neutral font-['Fira_Sans']">
    <div class="container flex justify-center mx-auto p-6">
        <form method="POST" action="{{ route('quiz.submit', ['index' => $index]) }}" class="space-y-6 w-11/12">
            @csrf
            <div class="bg-white rounded-lg shadow-md border-2 border-primary">
                <div class="mb-6 text-center bg-neutral rounded-lg h-64 border-2 border-primary m-4 bg-opacity-25">
                    <p class="text-3xl my-24 text-secondary  font-medium ">{{ $quiz['question'] }}</p>
                </div>
                <!-- Div untuk pilihan jawaban -->
                <div class="m-4 space-y-4">
                    @foreach ($quiz['options'] as $option)
                        <div 
                            onclick="selectOption(this, '{{ $option }}')"
                            class="cursor-pointer  p-3 border-2 text-teks border-neutral rounded-xl 
                            transition-all duration-300 ease-in-out 
                            hover:bg-neutral  hover:text-secondary hover:shadow-xl
                            active:scale-95"
                 >
                            {{ $option }}
                        </div>
                    @endforeach
                </div>
                
                <!-- Input tersembunyi untuk menyimpan jawaban yang dipilih -->
                <input type="hidden" id="selectedAnswer" name="answer" required>
            <div class="mt-4 mb-0 border-t-2 w-full bg-primary rounded-b-sm">
                <p class="font-medium text-sm p-2 text-white">Pertanyaan {{ $index + 1 }} dari {{ $totalQuestions }}</p>
            </div>    
            </div>
            
            <div class="flex justify-center mt-6 space-x-2">
                @if ($index > 0)
                    <a href="{{ route('quiz', ['index' => $index - 1]) }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg transform duration-300 hover:bg-gray-600 hover:scale-105">Before</a>
                @endif
                <button type="submit" name="next_index" value="{{ $index + 1 < $totalQuestions ? $index + 1 : 'result' }}" class="bg-blue-500 transform duration-300 text-white px-4 py-2 rounded-lg hover:bg-blue-600 hover:scale-105">
                    {{ $index + 1 < $totalQuestions ? 'Next' : 'Done' }}
                </button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>
