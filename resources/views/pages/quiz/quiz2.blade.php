<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
    <title>Kuis Level 2</title>
</head>
<body >
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-neutral to-accent opacity-55 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-primary to-secondary opacity-45 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>

    <div class="container flex justify-center mx-auto p-6">
        <form method="POST" action="{{ route('quiz.submit', ['level' => $quiz['level'], 'index' => $index]) }}" class="space-y-6 w-3/4">
            @csrf
            <div class="bg-white rounded-lg shadow-md border-2 border-primary">
                <div class="mb-6 text-center bg-neutral rounded-lg h-64 border-2 border-primary m-4 bg-opacity-25">
                    <p class="text-3xl my-24 text-secondary font-medium">{{ $quiz['question'] }}</p>
                </div>
                <div class="m-4 space-y-4">
                    @foreach ($quiz['options'] as $option)
                        <div onclick="selectOption(this, '{{ $option }}')" class="cursor-pointer p-3 border-2 text-teks border-neutral rounded-xl transition-all duration-300 ease-in-out hover:bg-neutral hover:text-secondary hover:shadow-xl active:scale-95">
                            {{ $option }}
                        </div>
                    @endforeach
                </div>
        
                <input type="hidden" id="selectedAnswer" name="answer" required>
                <div class="mt-4 mb-0 border-t-2 w-full bg-primary rounded-b-sm">
                    <p class="font-medium text-sm p-2 text-white">Pertanyaan {{ $index + 1 }} dari {{ $totalQuestions }}</p>
                </div>
            </div>
        
            <div class="flex justify-center mt-6 space-x-2">
                @if ($index > 0)
                    <a href="{{ route('quiz.submit', ['level' => $quiz['level'], 'index' => $index - 1]) }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg transform duration-300 hover:bg-gray-600 hover:scale-105">Before</a>
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
