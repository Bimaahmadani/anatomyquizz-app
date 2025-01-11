<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomi Skeletal Manusia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/anatomy.css') }}">
    <script src="https://kit.fontawesome.com/5abb97ff2e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
  
    <div class="grid grid-cols-3 mx-28">
       
      <!-- Gambar-->
       <div class="flex justify-center items-center">
                    <!-- Gambar Anatomi -->
                    <div class="image-container " style="">
                        <img src="{{ asset('img/Skeleton.png') }}" alt="Skeletal Manusia" class=" w-[260px]">
                        <span id="arrow-right" class="arrow absolute font-bold text-6xl text-black hidden">&#x2192;</span>
                        <span id="arrow-left" class="arrow absolute font-bold text-6xl text-black hidden">&#x2190;</span>
                        <div id="highlight-area" class="absolute border-t-2 border-b-2 border-l-2 border-black hidden"></div>


                    </div>
        </div>

        <!-- Daftar Bagian -->
                <div class="h-96 flex-col justify-center items-center m-2 col-span-2">
                    <div class="grid grid-cols-3 w-full h-full ">

                      <!-- Accordion Bagian Kepala -->
                      <div class="w-full h-full p-2">
                          <div class="border border-primary rounded-md w-full">
                            <button class=" w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                            type="button" aria-expanded="false" aria-controls="head-section">
                              Bagian Kepala
                            </button>
                            <div id="head-section" class="hidden  space-y-2">
                              <div class="list-item list-none" data-position="top: 0px; left: 83px;">Skull</div>
                              <div class="list-item list-none" data-position="top: 40px; left: 83px;">Maxilla</div>
                              <div class="list-item list-none" data-position="top: 53px; left: 83px;">Mandible</div>
                            </div>
                          </div>
                      </div>

                      <!-- Accordion Bagian Bahu dan Dada -->
                      <div class="w-full h-full p-2">
                      <div class="border border-primary rounded-md ">
                        <button class="w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                        type="button" aria-expanded="false" aria-controls="shoulder-chest-section">
                          Bagian Bahu dan Dada
                        </button>
                        <div id="shoulder-chest-section" class="hidden space-y-2">
                          <div class="list-item list-none" data-position="top: 99px; left: 170px;">Clavicle</div>
                          <div class="list-item list-none" data-position="top: 110px; left: 173px;">Scapula</div>
                          <div class="list-item list-none" data-position="top: 130px; left: 40px;" id="area" data-size="width: 30px; height: 30px;">Pectoral Girdle</div>
                          <div class="list-item list-none" data-position="top: 120px; left: 83px;">Sternum</div>
                        </div>
                      </div>
                      </div>

                      <!-- Accordion Bagian Lengan -->
                      <div class="w-full h-full p-2">
                        <div class="border border-primary rounded-md">
                          <button class="w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="arm-section">
                            Bagian Lengan
                          </button>
                          <div id="arm-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 140px; left: 13px;">Humerus</div>
                            <div class="list-item list-none" data-position="top: 250px; left: -7px;">Radius</div>
                            <div class="list-item list-none" data-position="top: 280px; left: -2px;">Ulna</div>
                            <div class="list-item list-none" data-position="top: 343px; left: 4px;" id="area" data-size="width: 24px; height: 10px;">Carpals</div>
                            <div class="list-item list-none" data-position="top: 356px; left: 0px;" id="area" data-size="width: 22px; height: 15px;">Metacarpals</div>
                            <div class="list-item list-none" data-position="top: 370px; left: 0px;" id="area" data-size="width: 20px; height: 30px;" >Phalanges (Hand)</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Accordion Bagian Dada dan Tulang Belakang -->
                      <div class="w-full h-full p-2">
                        <div class="border border-primary rounded-md">
                          <button class="w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="chest-vertebral-section">
                            Dada dan Tulang Belakang
                          </button>
                          <div id="chest-vertebral-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 155px; left: 50px;">Ribs</div>
                            <div class="list-item list-none" data-position="top: 243px; left: 83px;">Vertebral Column</div>
                          </div>
                        </div>
                      </div>

                      <!-- Accordion Bagian Panggul -->
                      <div class="w-full h-full p-2">
                        <div class="border border-primary rounded-md">
                          <button class="w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="pelvic-section">
                            Bagian Panggul
                          </button>
                          <div id="pelvic-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 305px; left: 40px;">Acetabulum</div>
                            <div class="list-item list-none" data-position="top: 308px; left: 83px;">Symphysis Pubis</div>
                            <div class="list-item list-none" data-position="top: 250px; left: 160px;">Ilium</div>
                            <div class="list-item list-none" data-position="top: 275px; left: 125px;">Sacrum</div>
                            <div class="list-item list-none" data-position="top: 290px; left: 125px;">Coccyx</div>
                            <div class="list-item list-none" data-position="top: 302px; left: 125px;">Pubis</div>
                            <div class="list-item list-none" data-position="top: 314px; left: 145px;">Ischium</div>
                            <div class="list-item list-none" data-position="top: 270px; left: 70px; " id="area" data-size="width: 28px; height: 90px;">Pelvic Girdle</div>
                          </div>
                        </div>
                      </div>
                        
                      <!-- Accordion Bagian Kaki -->
                      <div class="w-full h-full p-2">
                        <div class="border border-primary rounded-md">
                          <button class="w-full rounded-t-md bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="leg-section">
                            Bagian Kaki
                          </button>
                          <div id="leg-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 341px; left: 170px;">Femur</div>
                            <div class="list-item list-none" data-position="top: 458px; left: 160px;">Patella</div>
                            <div class="list-item list-none" data-position="top: 500px; left: 55px;">Tibia</div>
                            <div class="list-item list-none" data-position="top: 510px; left: 42px;">Fibula</div>
                            <div class="list-item list-none" data-position="top: 635px; left: 130px;" id="area" data-size="width: 18px; height: 10px;" >Tarsals</div>
                            <div class="list-item list-none" data-position="top: 645px; left: 135px;" id="area" data-size="width: 15px; height: 16px;">Metatarsals</div>
                            <div class="list-item list-none" data-position="top: 660px; left: 130px;" id="area" data-size="width: 20px; height: 20px;">Phalanges (Foot)</div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="w-full  p-2 h-96 col-span-3">
                        <div class="description bg-white rounded-lg shadow-lg h-1/2 border-2 w-full border-primary" id="description">
                          <div class="bg-primary rounded-t-md text-white p-2">
                            <h3 class="font-semibold text-xl">Penjelasan</h3>
                          </div>
                          <div class="p-2 text-lg text-secondary">
                             <p>Pilih bagian dari daftar untuk melihat penjelasan.</p>
                          </div>
                         
                      </div>
                      </div>
                    </div>
              
                      
                </div>
               
        
    </div>

    <script src="{{ asset('js/anatomy.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
