@extends('layout.master') 
@section('title', 'Pilih Level')
    
@section('content')
<div class="container h-screen flex flex-col justify-center items-center w-screen">
    <div class="w-full text-center mb-8">
        <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900">Pilih Level Anda</h1>
        <p class="mt-4 text-pretty text-lg font-normal text-gray-500 sm:text-xl/8">Pilih tantangan yang sesuai dan mulai kuasai anatomi rangka manusia sekarang juga.</p>
    </div>

    <div class="flex flex-row justify-evenly w-full">
        <div class="bg-white rounded-xl border-2 border-primary w-1/4 flex flex-col items-center  hover:scale-100 hover:shadow-primary hover:shadow-lg 
         transition-all duration-200 ease-in-out">
            <div class="w-11/12 border-b-2 border-gray-400  py-2 text-center">
                <h1 class="text-3xl font-medium text-black">Level 1</h1>
            </div>
            <div class="flex flex-row justify-center items-center w-full m-5 space-x-4">
               
                    <i class="fa-solid fa-star text-green-500 text-5xl"></i>
                    <i class="fa-regular fa-star text-green-500 text-6xl"></i>
                    <i class="fa-regular fa-star text-green-500 text-5xl"></i>
                
            </div>

            <div class="w-full  text-center">
                <h1 class="text-lg font-semibold text-gray-500">Beginner</h1>
            </div>
            <div class="m-4 text-center">
                <p class="text-md font-medium text-gray-700">
                    Mulai perjalananmu mengenal anatomi manusia! Level ini dirancang untuk pemula, 
                    dengan pertanyaan sederhana yang membantumu memahami dasar-dasar rangka tubuh manusia.
                </p>
            </div>

            <div class="w-11/12 border-t-2 border-gray-400 p-4 text-center">
                <a href="/quiz/1/0" class="rounded-md bg-primary px-3.5 py-2.5 text-lg transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Mulai</a>
            </div>
         </div>

         <div class="bg-white rounded-xl border-2 border-primary w-1/4 flex flex-col items-center  hover:scale-100 hover:shadow-primary hover:shadow-lg 
         transition-all duration-200 ease-in-out">
            <div class="w-11/12 border-b-2 border-gray-400  py-2 text-center">
                <h1 class="text-3xl font-medium text-black">Level 2</h1>
            </div>
            
            <div class="flex flex-row justify-center items-center w-full m-5 space-x-4">
               
                <i class="fa-solid fa-star text-yellow-500 text-5xl"></i>
                <i class="fa-solid fa-star text-yellow-500 text-6xl"></i>
                <i class="fa-regular fa-star text-yellow-500 text-5xl"></i>
            
            </div>

            <div class="w-full  text-center">
                <h1 class="text-lg font-semibold text-gray-500">Intermediate</h1>
            </div>

            <div class="m-4 text-center">
                <p class="text-md font-medium text-gray-700">
                    Tingkatkan tantanganmu! Level ini menghadirkan pertanyaan dengan tingkat kesulitan menengah untuk menguji 
                    pengetahuanmu lebih dalam tentang rangka manusia.
                </p>
            </div>

            <div class="w-11/12 border-t-2 border-gray-400 p-4 text-center">
                <a href="/quiz/2/0" class="rounded-md bg-primary px-3.5 py-2.5 text-lg transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Mulai</a>
            </div>
         </div>

         <div class="bg-white rounded-xl border-2 border-primary w-1/4 flex flex-col items-center  hover:scale-100 hover:shadow-primary hover:shadow-lg 
         transition-all duration-200 ease-in-out">
            <div class="w-11/12 border-b-2 border-gray-400  py-2 text-center">
                <h1 class="text-3xl font-medium text-black">Level 3</h1>
            </div>
            
            <div class="flex flex-row justify-center items-center w-full m-5 space-x-4">
               
                <i class="fa-solid fa-star text-red-500 text-5xl"></i>
                <i class="fa-solid fa-star text-red-500 text-6xl"></i>
                <i class="fa-solid fa-star text-red-500 text-5xl"></i>
            
            </div>

            <div class="w-full  text-center">
                <h1 class="text-lg font-semibold text-gray-500">Advanced</h1>
            </div>

            <div class="m-4 text-center">
                <p class="text-md font-medium text-gray-700">
                    Sudah siap untuk tantangan terbesar? Level ini dibuat untuk ahli yang ingin menguji 
                    pemahaman mendalam mereka tentang anatomi kerangka dengan pertanyaan kompleks
                </p>
            </div>

            <div class="w-11/12 border-t-2 border-gray-400 p-4 text-center">
                <a href="/quiz/3/0" class="rounded-md bg-primary px-3.5 py-2.5 text-lg transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Mulai</a>
            </div>
         </div>
   
    </div>

</div>
@endsection