@extends('layout.master2') 
@section('title', 'Kuis')
    
@section('content')
    <div class="container flex justify-center items-center mx-auto h-screen">
        <form method="POST" action="{{ route('quiz.submit', ['level' => $quiz['level'], 'index' => $index]) }}" 
            class="space-y-6 w-11/12 sm:w-7/12 max-h-screen">
            @csrf
            <div class="bg-white rounded-lg shadow-2xl border-2 border-primary">
                 <!-- Cek jika ada gambar -->
                @if(isset($quiz['image']) && $quiz['image'])
                    <div class="question-image flex justify-center m-2">
                        <img src="{{ asset($quiz['image']) }}" alt="Question Image" class="max-w-[240px] h-auto rounded-lg">
                    </div>
                @endif
                <div class="my-6 text-start w-full px-6">
                    <p class="text-2xl text-secondary font-normal">{{ $quiz['question'] }}</p>
                </div>
                <div class="m-4 space-y-4">
                    @foreach ($quiz['options'] as $option)
                        <div onclick="selectOption(this, '{{ $option }}')" class="cursor-pointer p-3 border-2 
                        text-teks border-neutral rounded-xl transition-all duration-300 ease-in-out hover:bg-neutral 
                        hover:text-secondary hover:shadow-xl active:scale-95">
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
                    <a href="{{ route('quiz.submit', ['level' => $quiz['level'], 'index' => $index - 1]) }}" class="bg-gray-500 
                        text-white px-4 py-2 rounded-lg transform duration-300 hover:bg-gray-600 hover:scale-105">Kembali</a>
                @endif
                <button type="submit" name="next_index" value="{{ $index + 1 < $totalQuestions ? $index + 1 : 'result' }}" class="
                bg-blue-500 transform duration-300 text-white px-4 py-2 rounded-lg hover:bg-blue-600 hover:scale-105">
                    {{ $index + 1 < $totalQuestions ? 'Selanjutnya' : 'Selesai' }}
                </button>
            </div>
        </form>
    </div>
@endsection
