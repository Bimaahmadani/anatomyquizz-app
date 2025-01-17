@extends('layout.master') 
@section('title', 'Tentang')
    
@section('content')

<div class="relative isolate px-6 pt-14 lg:px-8">

    <div class="grid grid-cols-1 sm:grid-cols-5">
        <div class="mx-auto max-w-2xl py-28 sm:py-14 lg:py-52 col-span-3 ">
            <div class="text-start">
              <h1 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Tentang Aplikasi Kami</h1>
              <p class="mt-8 text-lg/8 text-gray-700 sm:text-gray-600 sm:text-xl/8">
                Tulangku.com dirancang untuk membantu Anda mempelajari anatomi tubuh manusia dengan cara yang interaktif dan menyenangkan. 
                Melalui kombinasi pembelajaran visual dan kuis yang menarik, aplikasi ini bertujuan untuk membuat proses belajar menjadi lebih efektif dan engaging. 
                Baik Anda seorang pelajar, profesional medis, atau hanya sekadar ingin menambah wawasan, Tulangku.com memberikan pengalaman belajar yang mendalam dan interaktif.
              </p>
            </div>
        </div>

        <div class="image-container hidden sm:flex justify-center items-center col-span-2">
            <img src="{{ asset('img/anatomy-vintage (1).jpg') }}" alt="Skeletal Manusia" class="w-[400px] rounded-xl">
        </div>
        <img src="{{ asset('img/anatomy-vintage (1).jpg') }}" alt="Skeletal Manusia" class="absolute w-[400px] opacity-30 -z-10 top-24 left-52 rounded-xl sm:hidden ">
    </div>

</div>

<div class="pb-24 sm:pb-32">
<div class="mx-auto max-w-7xl px-6 lg:px-8 ">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base/7 font-semibold text-primary">Fitur Unggulan</h2>
        <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">Semua yang Anda Butuhkan untuk Belajar Anatomi</p>
        <p class="mt-6 text-lg/8 text-gray-600">Jelajahi fitur-fitur interaktif, kuis menantang, dan pengalaman belajar yang dipersonalisasi. Aplikasi ini dirancang untuk mendukung pembelajaran anatomi dengan cara yang menarik dan mudah dipahami.</p>
      </div>
      <div class="mx-auto mt-16 w-11/12 sm:mt-20 lg:mt-24 lg:w-3/4">
        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
          <div class="relative pl-16 ">
            <dt class="text-base/7 font-semibold text-gray-900">
              <div class="absolute left-0 top-0 flex size-12 items-center justify-center rounded-lg bg-primary hover:scale-110 transform duration-200 ease-in-out">
                <i class="fa-solid fa-chalkboard-user text-white text-3xl"></i>
              </div>
              Pembelajaran Interaktif
            </dt>
            <dd class="mt-2 text-base/7 text-gray-600">Jelajahi bagian-bagian tubuh dengan visual yang menarik dan informatif.</dd>
            <a href="/anatomy" class="text-sm/6 font-semibold text-blue-500 hover:text-primary underline">Mulai  <span aria-hidden="true">→</span></a>
          </div>
          <div class="relative pl-16">
            <dt class="text-base/7 font-semibold text-gray-900">
                <div class="absolute left-0 top-0 flex size-12 items-center justify-center rounded-lg bg-primary hover:scale-110 transform duration-200 ease-in-out">
                    <i class="fa-solid fa-clipboard-question text-white text-3xl"></i>
                </div>
                Kuis Menantang
            </dt>
            <dd class="mt-2 text-base/7 text-gray-600">Uji pengetahuan Anda dengan berbagai tingkat kesulitan dan raih pencapaian terbaik.</dd>
            <a href="/pilih" class="text-sm/6 font-semibold text-blue-500 hover:text-primary underline">Mulai  <span aria-hidden="true">→</span></a>
          </div>
         
        </dl>
      </div>
    </div>
</div>

    
 
  



@endsection