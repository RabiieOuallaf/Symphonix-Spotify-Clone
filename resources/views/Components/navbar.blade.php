<nav class="bg-neutral-900 w-screen h-[10%] flex">

    <span class="text-2xl text-white ml-8 flex items-center">Symphonix</span>


    <div class="navbar-container mx-72 flex justify-center items-center">

        <div class="user-section mx-5 flex items-center my-1">
            <!-- user image -->
            <i class="fa-solid fa-bell text-white mx-10 text-xl"></i>
            <img src="{{ asset('images/upload/admin.jpg') }}" alt="user's picture" class="w-16 h-16 rounded-full">
        </div>
    
        <div class="search-section flex mx-5 my-4 w-[100%]">
            <input type="text" placeholder="what do you want to listen to ?" class="w-[100%] h-8 p-5 text-white radius-full mx-10 rounded-md border-white border-2 border-white bg-inherit">
            <i class="fa-solid fa-magnifying-glass text-white my-4"></i>
        </div>
        
    </div>
    


</nav>