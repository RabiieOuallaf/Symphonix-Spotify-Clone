<section class="bg-neutral-900 w-[20%] h-[100%] absolute top-20">
    <!-- Site logo and back button -->

    <div class="back-btn flex flex-col text-center">
        <input class="btn my-10 bg-violet-600 text-white z-10 top-10 mx-5 border px-6 py-2 rounded-md hover:bg-inherit duration-200" type="submit" value="back" >
    </div>

   <div class="sidebar-sections text-zinc-400 flex flex-col text-center gap-7 my-10">

        <!-- Home -->
        <div class="home cursor-pointer hover:text-violet-600 ease-in-out duration-200">
            <i class="fa-solid fa-house mx-2"></i>
            <span>Home</span>
        </div>

        <!-- Musics -->
        <div class="musics cursor-pointer hover:text-violet-600 ease-in-out duration-200">
            <i class="fa-solid fa-music mx-2"></i>
            <span>Music</span>
        </div>

        <!-- Playlists -->
        <div class="playlists cursor-pointer hover:text-violet-600 ease-in-out duration-200">
            <i class="fa-solid fa-list mx-2"></i>
            <span>Playlist</span>
        </div>

        <!-- faivorites -->
        <div class="faivorites cursor-pointer hover:text-violet-600 ease-in-out duration-200">
            <i class="fa-solid fa-bookmark mx-2"></i>
            <span>Faivorites</span>
        </div>
        
   </div>

   <div class="sidebar-options text-zinc-400 my-20 text-center flex flex-col gap-7">
        <!-- Settings -->
        <div class="settings cursor-pointer hover:text-violet-600 ease-in-out duration-200 mx-2">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </div>

        <!-- logout -->
        <div class="logout cursor-pointer hover:text-violet-600 ease-in-out duration-200 mx-2">
            <i class="fa-solid fa-door-open"></i>
            <a href="logout">logout</a>

        </div>
   </div>

   
</section>