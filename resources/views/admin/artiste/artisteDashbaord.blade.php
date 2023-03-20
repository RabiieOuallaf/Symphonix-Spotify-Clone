<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>symphonix dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="min-h-screen grid grid-cols-[auto_1fr] antialiased  bg-neutral-800 text-black text-white w-[100%] overflow-hidden">

        <!-- Header -->
        <div class="fixed w-full flex items-center justify-between h-14 text-white z-20 bg-neutral-900">
            <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 border-none">
                <img class="hidden sm:block w-7 h-7 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden" src="" />
                <img class="hidden max-sm:block w-7 h-7 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden" src="" />
            </div>
            <div class="flex justify-between items-center h-full header-right">
                <ul class="flex items-center">

                    <li>
                        <div class="block w-px h-6 mx-3 bg-neutral-900"></div>
                    </li>
                    
                    <li>
                        <div class="flex items-center mr-4 hover:text-blue-100 cursor-pointer" onclick="location.href='/addArtiste'">

                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Add Artiste
                        </div>

                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 bg-neutral-800"></div>
                    </li>

                    <li>
                        <div class="flex items-center mr-4 hover:text-blue-100 cursor-pointer" onclick="location.href='/updateArtiste'">

                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Update Artiste
                        </div>
                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 bg-neutral-800"></div>
                    </li>
                    <li>
                        <a href="" class="flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->

        <!-- Sidebar -->
        <div class="mt-12 flex flex-col top-14 left-0 hover:w-64 md:w-64 bg-blue-900 bg-neutral-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1 items-center">
                    <li class="rounded-full border-2 border-blue-500 w-28 h-28 overflow-hidden">

                        <img src="{{ asset('images/root/ana.jpg') }}" alt="admin picture" class="w-[100%] h-[100%]">

                    </li>
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>
                    <li>
                        <a href="/dashbaord" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-solid fa-gauge"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashbaord</span>
                        </a>
                    </li>
                    <li>
                        <a href="/artisteDashbaord" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-solid fa-gauge"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Artiste</span>
                        </a>
                    </li>
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2023 By Rabie Ouallaf</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 h-full flex flex-wrap justify-around max-sm:flex-col max-sm:items-center col-start-2 col-span-2">



            <div class="max-w-2xl mx-auto">

                <div class="flex flex-col">
                    <div class="overflow-x shadow-md sm:rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                    <thead class="bg-violet-500">
                                        <tr>

                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Artiste ID
                                            </th>

                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Artiste Name
                                            </th>

                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Artiste birthday
                                            </th>


                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Artiste image
                                            </th>

                                        
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Artiste country
                                            </th>

                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-white uppercase text-gray-400">
                                                Actions
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 bg-gray-800 divide-gray-700">

                                    @foreach ($artistes as $artiste)

                                        <tr class="hover:bg-gray-700">
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$artiste->id}}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$artiste->artiste_name}}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$artiste->artiste_brithday}}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <img src="{{ Storage::url($artiste->artiste_image) }}" alt="song cover">
                                                </td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$artiste->artiste_country}}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white flex gap-2">
                                                    <button onclick="location.href='/updateArtiset/{{$artiste->id}}'" class="text-yellow-600">update</button>
                                                    <form action="/deleteArtiste/{{$artiste->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"class="text-red-800">delete</button>
                                                    </form>

                                                </td>

                                        </tr>
                                        @endforeach
                                    


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>


    </div>


    <!-- ./body -->
    </div>

</body>

</html>