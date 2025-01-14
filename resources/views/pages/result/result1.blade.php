<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5abb97ff2e.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Hasil Kuis Level {{ $level }} </title>
</head>
<body class="bg-neutral">
    <div class="container mx-auto p-6 w-2/4 h-screen bg-primary bg-opacity-55 flex flex-col items-center justify-center">
        <div class="text-center">
            <h1 class="font-semibold text-5xl mb-24 text-white">Hasil Kuis Quiz level {{ $level }}</h1>
        </div>
        <div class="bg-secondary w-full mx-8 p-4 rounded-2xl space-y-2">
            <h1 class="text-lg font-semibold text-white mt-4">Akurasi</h1>
            <div class="bg-gray-200 rounded-full overflow-hidden relative">
                <div id="progressBar" 
                    class="h-7 transition-all duration-100 ease-in-out"
                    style="width: 0%;"></div>
                <span id="percentageText" 
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 text-black text-lg font-bold rounded-lg">0%</span>
            </div>
        </div>

        <div class="grid grid-cols-3 w-full space-x-2 mt-4 mb-20">
            <!-- Elemen Benar -->
            <div class="relative flex items-center justify-center rounded-xl bg-secondary text-white hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                <i class="fa-solid fa-circle-check text-green-400 text-[8rem] absolute inset-0 opacity-30"></i>
                <div class="relative z-10">
                    <div class="text-center">
                        <p class="text-md text-4xl"><strong>{{ $correct }}</strong></p>
                    </div>
                    <div class="text-center">
                        <p class="font-light text-xl">Benar</p>
                    </div>
                </div>
            </div>

            <!-- Elemen Salah -->
            <div class="relative flex items-center justify-center rounded-xl bg-secondary text-white hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                <i class="fa-solid fa-circle-xmark text-red-500 text-[8rem] absolute inset-0 opacity-30"></i>
                <div class="relative z-10">
                    <div class="text-center">
                        <p class="text-md text-4xl"><strong>{{ $incorrect }}</strong></p>
                    </div>
                    <div class="text-center">
                        <p class="font-light text-xl">Salah</p>
                    </div>
                </div>
            </div>

            <!-- Elemen Tidak Dijawab -->
            <div class="relative flex items-center justify-center rounded-xl bg-secondary text-white hover:scale-105 transition duration-300 ease-in-out overflow-hidden p-4">
                <i class="fa-solid fa-circle-question text-blue-400 text-[8rem] absolute inset-0 opacity-30"></i>
                <div class="relative z-10">
                    <div class="text-center">
                        <p class="text-md text-4xl"><strong>{{ $unanswered }}</strong></p>
                    </div>
                    <div class="text-center">
                        <p class="font-light text-xl">Tidak Dijawab</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Ulangi Level dan Lanjut ke Level Berikutnya -->
        <a href="{{ route('quiz', ['level' => $level, 'index' => 0]) }}" class="w-full rounded-lg bg-blue-500 text-center py-4 text-xl font-semibold transition-all duration-300 ease-in-out text-white shadow-sm hover:bg-opacity-55">
            <i class="fa-solid fa-rotate-right text-2xl mr-2"></i>Ulangi Level
        </a>
        <a href="{{ route('quiz', ['level' => $level + 1, 'index' => 0]) }}" class="w-full mt-2 rounded-lg bg-gray-500 text-center py-4 text-xl font-semibold transition-all duration-300 ease-in-out text-white shadow-sm hover:bg-opacity-55">
            <i class="fa-solid fa-arrow-right-from-bracket mr-2 text-2xl"></i>Lanjut ke Level {{ $level + 1 }}
        </a>
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
</body>
</html>
