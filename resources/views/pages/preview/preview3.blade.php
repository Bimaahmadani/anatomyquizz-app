<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/5abb97ff2e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container flex flex-row justify-center  items-center h-screen p-6 ">
        <div class="rounded-lg border-primary border-2 h-3/4 w-1/2 flex flex-col items-center shadow-2xl">
                <div class="w-full rounded-t-sm bg-primary text-white text-center py-2">
                    <h1 class="text-5xl font-semibold">Level 3</h1>
                </div>
                <div class="grid grid-cols-5 w-full mt-6 text-5xl">
                    <div class=" col-span-2 flex justify-end">
                        <i class="fa-solid fa-star text-red-500"></i>
                    </div>
                    <div class="flex justify-center">
                        <i class="fa-solid fa-star text-red-500"></i>
                    </div>
                    <div class="col-span-2 flex justify-start">
                        <i class="fa-solid fa-star text-red-500"></i>
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>