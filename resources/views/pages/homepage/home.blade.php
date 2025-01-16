 @extends('layout.master') 
 @section('title', 'Beranda')
     
@section('content')
   <div class="relative isolate px-6 pt-14 lg:px-8">
          <div class="grid grid-cols-1 sm:grid-cols-5">
             <div class="image-container hidden sm:flex w-full justify-center items-center col-span-2" style="">
              <img src="{{ asset('img/Skull.png') }}" alt="Skeletal Manusia" class=" w-[400px]">
             </div>
             

              <div class="mx-auto max-w-2xl py-20 sm:py-14 lg:py-36 col-span-3 ">
                <div class="text-start">
                  <h1 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Belajar Anatomi Tubuh Secara Interaktif</h1>
                  <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Tingkatkan pemahaman Anda tentang anatomi manusia melalui pembelajaran interaktif dan kuis menantang. Mulai petualangan edukatif Anda hari ini!</p>
                  <div class="mt-10 flex items-center justify-start gap-x-6">
                    <a href="/anatomy" class="rounded-md bg-primary px-3.5 py-2.5 text-lg transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"><i class="fa-solid fa-skull mr-2"></i>Anatomy</a>
                    <a href="/pilih" class="rounded-md bg-primary px-3.5 py-2.5 text-lg transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 hover:scale-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"><i class="fa-solid fa-feather mr-2"></i>Quiz</a>
                  </div>
                </div>
              </div>
              
              <img src="{{ asset('img/Skull.png') }}" alt="Skeletal Manusia" class="absolute -right-10 top-16 w-[400px] opacity-30 sm:hidden -z-10">
          </div>
    </div>  
@endsection   
       
