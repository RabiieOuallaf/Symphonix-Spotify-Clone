<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create playlist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <livewire:styles />
    <livewire:scripts />

</head>

<body class="h-screen overflow-hidden flex items-center justify-center">
    <div class="relative w-full flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1616356607338-fd87169ecf1a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80); background-size:cover;">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-2xl w-full space-y-8 p-10 bg-neutral-900  rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg text-white mr-auto">Add song to playlist</h2>
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <div class="mt-5">
                        <div class="form">
                            <form action="/musicToplaylist" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="playlist-creator hidden">
                                    @if(auth()->check()) 
                                        <input type="text" name="creator_email" value="{{ auth()->user()->email }}">
                                    @endif
                                </div>
                                
                                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-white py-2">playlist name<abbr title="required">*</abbr></label>
                                        <input placeholder="playlist Name" name="playlist_name"class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" >
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    @livewire('playlist-search')
                                </div>

                                <p class="text-xs text-red-500 text-right my-3">Required fields are marked with an
                                    asterisk <abbr title="Required field">*</abbr></p>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-black rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
                                    <input type="submit" class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"/>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
