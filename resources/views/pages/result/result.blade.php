@extends('layout.master2') 
@section('title', 'Hasil Kuis {{ $level }}')
    
@section('content')
    <div class="container mx-auto flex flex-col justify-center items-center h-screen px-4 md:px-8 lg:px-16">
        <div class="bg-neutral bg-opacity-25 rounded-xl p-6 w-full sm:w-3/4 md:w-2/4 flex flex-col 
        items-center justify-center border-2 border-primary shadow-xl mt-24 sm:mt-0">
            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl mb-14 text-secondary font-semibold">HASIL QUIZ LEVEL {{ $level }}</h1>
            </div>
            <div class="bg-secondary w-full mx-auto p-4 rounded-2xl space-y-2">
                <h1 class="text-lg sm:text-xl font-normal text-white mt-4">Akurasi</h1>
                <div class="bg-gray-200 rounded-full overflow-hidden relative">
                    <div id="progressBar" class="h-6 transition-all duration-100 ease-in-out" style="width: 0%;"></div>
                    <span id="percentageText" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-black text-sm sm:text-lg font-bold rounded-lg">0%</span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full mt-6 mb-8">
                <!-- Elemen Benar -->
                <div class="relative flex items-center justify-center rounded-xl bg-secondary 
                text-white hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                    <i class="fa-solid fa-circle-check text-green-400 text-[6rem] sm:text-[8rem] absolute inset-0 opacity-30"></i>
                    <div class="relative z-10 text-center">
                        <p class="text-3xl sm:text-4xl font-semibold">{{ $correct }}</p>
                        <p class="font-light text-sm sm:text-xl">Benar</p>
                    </div>
                </div>

                <!-- Elemen Salah -->
                <div class="relative flex items-center justify-center rounded-xl bg-secondary text-white 
                hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                    <i class="fa-solid fa-circle-xmark text-red-500 text-[6rem] sm:text-[8rem] absolute inset-0 opacity-30"></i>
                    <div class="relative z-10 text-center">
                        <p class="text-3xl sm:text-4xl font-semibold">{{ $incorrect }}</p>
                        <p class="font-light text-sm sm:text-xl">Salah</p>
                    </div>
                </div>

                <!-- Elemen Tidak Dijawab -->
                <div class="relative flex items-center justify-center rounded-xl bg-secondary text-white 
                hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                    <i class="fa-solid fa-circle-question text-blue-400 text-[6rem] sm:text-[8rem] absolute inset-0 opacity-30"></i>
                    <div class="relative z-10 text-center">
                        <p class="text-3xl sm:text-4xl font-semibold">{{ $unanswered }}</p>
                        <p class="font-light text-sm sm:text-xl">Tidak Dijawab</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center w-full gap-2 mt-8">
                <a href="{{ route('quiz', ['level' => $level, 'index' => 0]) }}" class="w-full sm:w-1/2 rounded-lg 
                    bg-blue-500 text-center py-3 text-base sm:text-lg font-semibold transition-all duration-300 ease-in-out 
                    text-white shadow-sm hover:bg-opacity-55">
                    <i class="fa-solid fa-rotate-right mr-2"></i>Ulangi Level
                </a>
                <a href="/pilih" class="w-full sm:w-1/2 rounded-lg bg-gray-500 text-center py-3 
                text-base sm:text-lg font-semibold transition-all duration-300 ease-in-out 
                text-white shadow-sm hover:bg-opacity-55">
                    <i class="fa-solid fa-hand-pointer mr-2"></i>Pilih Level Lainnya
                </a>
            </div>

            <a href="/" class="mt-2 w-full rounded-lg bg-red-500 text-center py-3 text-base 
            sm:text-lg font-semibold transition-all duration-300 ease-in-out text-white shadow-sm hover:bg-opacity-55">
                <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Keluar
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
          const score = {{ $score }}; // Skor dari server
          const totalQuestions = {{ $totalQuestions }}; // Total pertanyaan dari server
          const percentage = Math.round((score / totalQuestions) * 100);
  
          const progressBar = document.getElementById("progressBar");
          const percentageText = document.getElementById("percentageText");
  
          // Menentukan warna berdasarkan nilai persentase
          let color;
          if (percentage < 50) {
              color = "bg-red-500"; // Merah
          } else if (percentage < 70) {
              color = "bg-yellow-500"; // Kuning
          } else if (percentage < 80) {
              color = "bg-orange-500"; // Oranye
          } else {
              color = "bg-green-500"; // Hijau
          }
  
          // Tambahkan kelas warna ke progress bar
          progressBar.classList.add(color);
  
          // Animasi progress bar
          let currentPercentage = 0;
          const interval = setInterval(() => {
              if (currentPercentage <= percentage) {
                  percentageText.textContent = `${currentPercentage}%`;
                  progressBar.style.width = `${currentPercentage}%`;
                  currentPercentage++;
              } else {
                  clearInterval(interval);
              }
          }, 20);
      });
      </script>
@endsection

