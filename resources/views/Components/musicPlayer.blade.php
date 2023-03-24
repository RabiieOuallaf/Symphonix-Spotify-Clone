<footer id="footer" class="bg-purple-800 col-span-6 p-4 grid grid-cols-3 place-items-center gap-6 fixed z-10 w-full bottom-0">
    <audio controls id="footerMusic" preload="metadata" src="" hidden></audio>
    <div class="flex items-center">
        <div class="overflow-hidden rounded-xl mr-4">
            <img id="footerImg" class="h-14 w-14 flex-shrink-0" src="{{asset('images/backgrounds/addMusicBackground.jpg')}}" alt="" />
        </div>
        <div class="mr-4">
            <div id="footerTitle" class="text-sm text-white text-line-clamp-1 font-semibold">
                Heaven
            </div>
            <div id="footerAlbum" class="text-xs text-white text-line-clamp-1">
                Ludwig van Beethoven
            </div>
        </div>
        <div class="flex items-center">
            <button class="text-white p-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                </svg>
            </button>
        </div>
    </div>
    <div>
        <div class="flex items-center justify-center mb-3">
            <button class="w-5 h-5 text-white mr-6">
                <svg class="fill-current w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                </svg>
            </button>
            {{-- previous btn  --}}
            <button id="previous" class="w-5 h-5 text-white mr-6">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
                </svg>
            </button>
            {{-- pause button --}}
            <button id="pause" class="hidden w-8 h-8 border border-white rounded-full flex text-white mr-6">
                <svg class="fill-current h-5 w-5 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
                </svg>
            </button>
            {{-- play button --}}
            <button  id="play" class="rounded-full flex text-white mr-6">
                <svg class="fill-current h-8 w-8 m-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z" fill="currentColor" /> <path d="M16 12L10 16.3301V7.66987L16 12Z" fill="currentColor" /> </svg> 
            </button>
            {{-- next btn --}}
            <button id="next" class="w-5 h-5 text-white mr-6">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
                </svg>
            </button>
            <button class="w-5 h-5 text-white">
                <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z" />
                </svg>
            </button>
        </div>
        <div class="flex items-center">
            <span id="startMusicDuration" class="text-xs text-white font-light"></span>
            <input type="range" max="100" id="progressBar" class="w-full h-1 bg-gray-400 rounded-lg appearance-none cursor-pointer">
            <span id="endMusicDuration" class="text-xs text-white font-light"></span>
        </div>
    </div>
    <div class="flex flex-1 items-center space-x-1">
        <i class="fa-solid fa-volume-xmark cursor-pointer" id="mute"></i>
        <input type="range" min="0" max="100" value="2.5" step="0.5" id="volumInp" class=" h-1 bg-gray-400 rounded-lg appearance-none cursor-pointer ">
        <i class="fa-solid fa-volume-high cursor-pointer" id="unmute"></i>
    </div>
</footer>

<script>
    // all music on table
let music = document.querySelectorAll('#musicTable');

// music footer bar
let footer = document.getElementById('footer');
let footerImg = document.getElementById('footerImg');
let footerTitle = document.getElementById('footerTitle');
let footerAlbum = document.getElementById('footerAlbum');
// footer audio src
let footerMusic = document.getElementById('footerMusic');
// footer play button
let playBtn = document.getElementById('play');
// footer pause btn
let pauseBtn = document.getElementById("pause");
// footer next btn
let nextBtn = document.getElementById("next");
// footer previous btn
let previousBtn = document.getElementById("previous");
// footer volum
let volumInp = document.getElementById('volumInp');
// footer mute btn
let muteBtn = document.getElementById('mute');
// footer demute btn
let unmuteBtn = document.getElementById('unmute');
// footer start music duration
let startMusicDuration = document.getElementById("startMusicDuration");
// footer end music duration
let endMusicDuration = document.getElementById("endMusicDuration");
// footer progress bar
let progressBar = document.getElementById("progressBar");


let currentSong = '';
let indexOfSong = 0;
let currentDuration = 0;
volumInp.value = 80;
progressBar.value = 0;

music.forEach((ele, i) => {
    ele.addEventListener("dblclick", () => {

        // current song that clicked on
        currentSong = ele.querySelector("#audio").src;
        // current song index
        indexOfSong = i;
        // show footer bar
        footer.classList.remove("hidden");
        // replace footer with
        footerImg.src = ele.querySelector("#musicImg").src;
        footerTitle.textContent = ele.querySelector("#title").textContent;
        footerAlbum.textContent = ele.querySelector("#artiste").textContent;
        footerMusic.src = currentSong;

        // play music on the footer bar
        footerMusic.play();
        console.log(footerMusic.currentTime);
        // give the footer current volume
        footerMusic.volume = volumInp.value / 100;

        playBtn.classList.add("hidden");
        pauseBtn.classList.remove("hidden");
    });
})

// get the duration of a song
footerMusic.addEventListener('loadedmetadata', () => {
    currentDuration = footerMusic.duration;
    let second = `${parseInt(`${currentDuration % 60}`, 10)}`.padStart(2,'0');
    let minute = parseInt(`${(currentDuration / 60) % 60}`, 10);
    endMusicDuration.textContent = `${minute}:${second}`;
    progressBar.max = currentDuration;
});
// get updated time by second and update the progress bar in the same time
footerMusic.addEventListener('timeupdate', () => {
    updateProgress(footerMusic.currentTime);
});
// update progressbar while music played
function updateProgress(time) {
    progressBar.value = time;
    let second = `${parseInt(`${time % 60}`, 10)}`.padStart(2, "0");
    let minute = parseInt(`${(time / 60) % 60}`, 10);
    startMusicDuration.textContent = `${minute}:${second}`;
} 

// play music 
playBtn.addEventListener("click", () => {
    footerMusic.play();
    playBtn.classList.add("hidden");
    pauseBtn.classList.remove("hidden");
});

// pause music
pauseBtn.addEventListener('click', () => {
    footerMusic.pause();
    playBtn.classList.remove("hidden");
    pauseBtn.classList.add("hidden");
})

// next btn
nextBtn.addEventListener('click', () => {
    indexOfSong++;
    // check if index of song big than length of all songs then return to 0
    if (indexOfSong > music.length - 1) {
        indexOfSong = 0;
        // nextBtn.preventDefault();
    }
    currentSong = music[indexOfSong].querySelector("#audio").src;
    // replace footer bar with song elements [song, image, title, album ...]
    let img = music[indexOfSong].querySelector("#musicImg").src;
    let title = music[indexOfSong].querySelector("#title").textContent;
    let album = music[indexOfSong].querySelector("#artiste").textContent;
    let audio = currentSong;
    handleFooter(img, title, album, audio);

})

// next btn
previousBtn.addEventListener('click', () => {
    indexOfSong--;
    if (indexOfSong < 0) {
        indexOfSong = music.length - 1;
        // nextBtn.preventDefault();
    }
    currentSong = music[indexOfSong].querySelector("#audio").src;
    let img = music[indexOfSong].querySelector("#musicImg").src;
    let title = music[indexOfSong].querySelector("#title").textContent;
    let album = music[indexOfSong].querySelector("#artiste").textContent;
    let audio = currentSong;
    handleFooter(img, title, album, audio);
    // remove bg from all music tr
    music.forEach((ele) => {
        ele.classList.remove("bg-gray-200/20");
    });
    // add bg to the next element
    music[indexOfSong].classList.add("bg-gray-200/20");
})
// function  that handle the footer bar to avoid DRY
function handleFooter(img, title, album, audio) {
    footerImg.src = img;
    footerTitle.textContent = title;
    footerAlbum.textContent = album;
    footerMusic.src = audio;
    footerMusic.play();
}

// handle the volum
volumInp.addEventListener('input', () => {
    mute.classList.remove("text-gray-500");
    if (volumInp.value <= 1) {
        mute.classList.add("text-gray-500");
    }
    footerMusic.volume = volumInp.value / 100;
})

mute.addEventListener('click', () => {
    mute.classList.add('text-gray-500');
    volumInp.value = 0;
    footerMusic.volume = 0;
})
unmute.addEventListener('click', () => {
    mute.classList.remove("text-gray-500");
    volumInp.value = 100;
    footerMusic.volume = volumInp.value / 100;
})
</script>