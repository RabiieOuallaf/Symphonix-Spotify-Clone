<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>band dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden flex items-center justify-center">
    <div class="relative w-full flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://images.unsplash.com/photo-1526478806334-5fd488fcaabc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1216&q=80); background-size:cover;">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-2xl w-full space-y-8 p-10 bg-neutral-900  rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg mr-auto">Shop Info</h2>
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <div class="mt-5">
                        <div class="form">
                            <form action="/band/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="md:space-y-2 mb-3">
                                    <label class="text-xs font-semibold text-white py-2">band banner<abbr class="hidden" title="required">*</abbr></label>
                                    <div class="flex items-center py-6">
                                        
                                        <label class="cursor-pointer ">
                                            <input type="file"name="band_banner" required='require' class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-violet-400 hover:bg-violet-500 hover:shadow-lg">
                                        </label>
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-white py-2">band Name <abbr title="required">*</abbr></label>
                                        <input placeholder="band Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="band_name">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-white py-2">Country <abbr title="required">*</abbr></label>
                                        <input placeholder="brand country :" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="band_country">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class=" font-semibold text-white py-2">band Website</label>
                                    <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                        <div class="flex">
                                            <span class="flex items-center leading-normal bg-grey-lighter border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-grey-dark text-sm w-12 h-10 bg-violet-300 justify-center items-center  text-xl rounded-lg text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" name="brand_artiste_website" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow" placeholder="https://">
                                    </div>
                                </div>
                                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                    
                                    <div class="w-full flex flex-col mb-3" id="bandMemeberContainer">
                                        <label class="font-semibold text-white py-2">band memebers<abbr title="required">*</abbr></label>
                                        <input placeholder="band" name="memebers"class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" >
                                    </div>
                                    <span class="text-4xl font-bold text-white mt-7 cursor-pointer" id="addMember">+</span>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-white py-2">band realse date <abbr title="required">*</abbr></label>
                                        <input placeholder="band Name" name="band_creating_date"class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="date" >
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                    
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

<style>
    .myBg 
    {
        background: url('../../../public/images/backgrounds/addbandBackground.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<script>
    // const addMember = document.getElementById('addMember');
    // const bandMemeberContainer = document.getElementById('bandMemeberContainer');
    
    // addMember.addEventListener('click', _ => {
    //     const moreMemebers = document.createElement('input');
    //     moreMemebers.classList.add("appearance-none", "block", "w-full", "bg-grey-lighter", "text-grey-darker", "border", "border-grey-lighter", "rounded-lg", "h-10", "px-4");
    //     moreMemebers.placeholder = ""
    //     bandMemeberContainer.appendChild(moreMemebers);
    // })
</script>