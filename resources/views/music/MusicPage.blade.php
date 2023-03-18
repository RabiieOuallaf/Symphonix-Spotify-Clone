<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Symphonix</title>
        <!-- Tailwind -->
        @vite(['resources/css/app.css'])
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    </head>
    <body class="h-[100%] overflow-hidden overflow-y-auto bg-neutral-800" >
        <section class="components w-[100%]">
            
            <div class="flex flex-col">

                <x-navbar class="flex-1"/>  
                <!-- Music banner -->   
                <div class="flex justify-center items-center margin-auto w-[120%] "> 
                    <div class="banner-image flex justify-center items-center w-[70%] ">
                        <img src="{{ asset('images/upload/banners/musicBanner.jpg') }}" alt="music banner image" class="object-cover w-[100%]">
                    </div>
                </div>
                <x-Sidebar class="flex-1"/>
                
                <!-- Music informations -->

                <div class="music-info w-[68%] flex flex-col items-center gap-5 my-10">

                    <div class="music-name">
                        <p class="text-2xl text-white font-mono">Music name : <span class="text-3xl text-gray-200 font-bold">lofi</span></p>
                    </div>

                    <div class="brand-name">
                        <p class="text-2xl text-white font-mono">Artist name : <span class="text-3xl text-gray-200 font-bold">lofi music</span></p>
                    </div>

                    <div class="realsing-date">
                        <p class="text-2xl text-white font-mono">Song released at : <span class="text-3xl text-gray-200 font-bold">2023/3</span></p>
                    </div>
                    
                </div>

            </div>


            
            
        </section>
    </body>
</html>
