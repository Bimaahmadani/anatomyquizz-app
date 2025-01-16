@extends('layout.master') 
@section('title', 'Beranda')
    
@section('content')

    <div class="grid grid-cols-3 mx-28 mt-24">
       
      <!-- Gambar-->
       <div class="flex justify-center items-center">
                    <!-- Gambar Anatomi -->
                    <div class="image-container " style="">
                        <img src="{{ asset('img/Skeleton.png') }}" alt="Skeletal Manusia" class=" w-[260px]">
                        <span id="arrow-right" class="arrow absolute  text-black hidden">&#x2192;</span>
                        <span id="arrow-left" class="arrow absolute text-black hidden">&#x2190;</span>
                        <div id="highlight-area" class="absolute border-t-2 border-b-2 border-l-2 border-black hidden"></div>


                    </div>
        </div>
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-neutral to-accent opacity-55 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
          <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-primary to-secondary opacity-45 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>


        <!-- Daftar Bagian -->
                <div class="h-96 flex-col justify-center items-center m-2 col-span-2">
                    <div class="grid grid-cols-3 w-full h-full ">

                      <!-- Accordion Bagian Kepala -->
                      <div class="w-full h-full p-2">
                          <div class="border-2 border-primary rounded-md bg-white ">
                            <button class=" w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                            type="button" aria-expanded="false" aria-controls="head-section">
                              Bagian Kepala
                            </button>
                            <div id="head-section" class="hidden  space-y-2">
                              <div class="list-item list-none" data-position="top: 15px; left: 83px;"  id="area" data-size="width: 20px; height: 79px;">Skull</div>
                              <div class="list-item list-none" data-position="top: 15px; left: 70px;">Nasal</div>
                              <div class="list-item list-none" data-position="top: 15px; left: 45px;">Temporal</div>
                              <div class="list-item list-none" data-position="top: 30px; left: 50px;">Zygomatic</div>
                              <div class="list-item list-none" data-position="top: 42px; left: 70px;">Maxilla</div>
                              <div class="list-item list-none" data-position="top: 55px; left: 70px;">Mandible</div>
                            </div>
                          </div>
                      </div>

                      <!-- Accordion Bagian Bahu dan Dada -->
                      <div class="w-full h-full p-2">
                      <div class="border-2 border-primary rounded-md bg-white ">
                        <button class="w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                        type="button" aria-expanded="false" aria-controls="shoulder-chest-section">
                          Bagian Bahu dan Dada
                        </button>
                        <div id="shoulder-chest-section" class="hidden space-y-2">
                          <div class="list-item list-none" data-position="top: 101px; left: 193px;">Clavicle</div>
                          <div class="list-item list-none" data-position="top: 112px; left: 200px;">Scapula</div>
                          <div class="list-item list-none" data-position="top: 130px; left: 40px;" id="area" data-size="width: 30px; height: 30px;">Pectoral Girdle</div>
                          <div class="list-item list-none" data-position="top: 120px; left: 70px;">Sternum</div>
                        </div>
                      </div>
                      </div>

                      <!-- Accordion Bagian Lengan -->
                      <div class="w-full h-full p-2">
                        <div class="border-2 border-primary rounded-md bg-white">
                          <button class="w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="arm-section">
                            Bagian Lengan
                          </button>
                          <div id="arm-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 140px; left: 0px;">Humerus</div>
                            <div class="list-item list-none" data-position="top: 250px; left: -20px;">Radius</div>
                            <div class="list-item list-none" data-position="top: 280px; left: -15px;">Ulna</div>
                            <div class="list-item list-none" data-position="top: 343px; left: 4px;" id="area" data-size="width: 24px; height: 10px;">Carpals</div>
                            <div class="list-item list-none" data-position="top: 356px; left: 0px;" id="area" data-size="width: 22px; height: 15px;">Metacarpals</div>
                            <div class="list-item list-none" data-position="top: 370px; left: 0px;" id="area" data-size="width: 20px; height: 30px;" >Phalanges (Hand)</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Accordion Bagian Dada dan Tulang Belakang -->
                      <div class="w-full h-full p-2">
                        <div class="border-2 border-primary rounded-md bg-white">
                          <button class="w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="chest-vertebral-section">
                            Dada dan Tulang Belakang
                          </button>
                          <div id="chest-vertebral-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 157px; left: 37px;">Ribs</div>
                            <div class="list-item list-none" data-position="top: 245px; left: 70px;">Vertebral Column</div>
                          </div>
                        </div>
                      </div>

                      <!-- Accordion Bagian Panggul -->
                      <div class="w-full h-full p-2">
                        <div class="border-2 border-primary rounded-md bg-white">
                          <button class="w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="pelvic-section">
                            Bagian Panggul
                          </button>
                          <div id="pelvic-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 307px; left: 27px;">Acetabulum</div>
                            <div class="list-item list-none" data-position="top: 310px; left: 70px;">Symphysis Pubis</div>
                            <div class="list-item list-none" data-position="top: 252px; left: 184px;">Ilium</div>
                            <div class="list-item list-none" data-position="top: 275px; left: 155px;">Sacrum</div>
                            <div class="list-item list-none" data-position="top: 293px; left: 155px;">Coccyx</div>
                            <div class="list-item list-none" data-position="top: 305px; left: 155px;">Pubis</div>
                            <div class="list-item list-none" data-position="top: 317px; left: 170px;">Ischium</div>
                            <div class="list-item list-none" data-position="top: 270px; left: 70px; " id="area" data-size="width: 28px; height: 90px;">Pelvic Girdle</div>
                          </div>
                        </div>
                      </div>
                        
                      <!-- Accordion Bagian Kaki -->
                      <div class="w-full h-full p-2">
                        <div class="border-2 border-primary rounded-md bg-white">
                          <button class="w-full rounded-t-sm bg-primary px-3.5 py-2.5 text-md transition-all duration-300 ease-in-out font-semibold text-white shadow-sm hover:bg-opacity-55 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" 
                          type="button" aria-expanded="false" aria-controls="leg-section">
                            Bagian Kaki
                          </button>
                          <div id="leg-section" class="hidden space-y-2">
                            <div class="list-item list-none" data-position="top: 344px; left: 193px;">Femur</div>
                            <div class="list-item list-none" data-position="top: 458px; left: 180px;">Patella</div>
                            <div class="list-item list-none" data-position="top: 500px; left: 42px;">Tibia</div>
                            <div class="list-item list-none" data-position="top: 510px; left: 29px;">Fibula</div>
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

@endsection 

