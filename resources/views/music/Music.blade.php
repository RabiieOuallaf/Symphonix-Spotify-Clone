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

<body class="antialiased  overflow-hidden overflow-y-auto bg-neutral-800">

    <section class="homepage w-[100%] h-[900px]">

        <div class="flex flex-col">

            <x-navbar class="flex-1" />
            <div class="flex justify-center items-center w-[120%]">

                <<div class="playlist w-[75%]" id="musicTable">


                    <div class="bg-neutral-700 shadow-lg rounded p-1 flex gap-5">

                        <form action="/music/like" method="post" class="absolute">
                            <button><i class="fa-solid fa-heart text-white mx-2 text-4xl absolute cursor-pointer"></i></button>
                            @csrf
                            <input type="hidden" name="user_id" value=1>
                            <input type="hidden" name="music_id" value=2>
                        </form>
                        <img class="w-full md:w-80 block rounded" src="{{ Storage::url($music->music_banner) }}" alt="song banner" id="musicImg" />
                        <div class="group relative">
                            <div class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
                                <button class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition" onclick="location.href='/music/{{$music->id}}'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </button>

                                <button class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition" onclick="playAudio('{{ Storage::url($music->music_audio) }}')">
                                    <svg xmlns="http://.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                    </svg>
                                    <audio id="song_player" controls class="hidden">
                                        <source src="{{Storage::url($music->music_audio)}}" id="audio" type="audio/mp3">
                                    </audio>
                                </button>

                                <button id="playlist_options" class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                    <div class="dropdown hidden" id="dropdown">

                                        <a href="/addToPlaylist/{{$music->id}}" class="text-md text-yellow-500 font-semibold hover:text-yellow-700 duration-300">Update</a>


                                    </div>
                                </button>

                            </div>
                        </div>
                        <div class="p-2 text-center flex flex-col justify-center gap-3">
                            <h3 class="text-white text-xl" id="title">{{ $music->song_name }}</h3>

                            <p class="text-white text-md " id="artiste"> {{ $music->artist_name }} </p>

                            <p class="text-white text-xl">{{ $music->creating_date }}</p>
                        </div>
                    </div>


            </div>


        </div>
        <div class="">



            <div class="antialiased mx-auto max-w-screen-sm">
                <h3 class="mb-4 text-lg font-semibold text-white">Comments</h3>
                @foreach($comments as $comment)

                <div class="space-y-4 my-5">

                    <div class="flex">

                        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                            <strong class="text-md text-white font-semibold">{{ $comment->comment_creator }}</strong> <span class="text-xs mx-2 text-white">{{$comment->created_at}}</span>
                            <p class="text-sm text-white">
                                {{$comment->comment}}
                            </p>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>




        </div>
        <x-comments :music="$music" />
        <x-Sidebar class="flex-1" />


        </div>


    </section>
    <x-musicplayer class="absolute bottom-0" />



</body>

</html>