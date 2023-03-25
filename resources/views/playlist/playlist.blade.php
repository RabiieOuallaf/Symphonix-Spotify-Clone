<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Symphonix</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased  overflow-hidden overflow-y-auto bg-neutral-800">

    <section class="homepage w-[100%] h-[700px]">

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <x-navbar />
            <x-sidebar />
            <div class="w-full overflow-x-auto">
                
                <table class="w-[85%] absolute right-0">
                    <thead>
                        <tr class="text-sm font-semibold tracking-wide text-left text-white bg-purple-700 uppercase">
                            <th class="px-2 py-3">song name</th>
                            <th class="px-2 py-3">artiste</th>
                            <th class="px-2 py-3">realsed date</th>
                            <th class="px-2 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-neutral-800">
                        @foreach($songs as $song) 
                       
                        <tr class="text-white">
                            <td class="px-2 py-3 border">
                            
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-28 h-28 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-md" src="{{ Storage::url($song->music_banner) }}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-white">{{$song->song_name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-2 py-3 text-ms font-semibold border">{{$song->artist_name}}
                                
                                </td>
                                <td class="px-2 py-3 text-xs border">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                                </td>
                                <td class="px-2 py-3 text-sm border">{{ $song->creating_date }}</td>
                            </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </section>
    <x-musicplayer class="absolute bottom-0" />



</body>

</html>


<!-- 
<section class="container mx-auto p-6 font-mono">
  
</section> -->