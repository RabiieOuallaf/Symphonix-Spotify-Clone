    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="mb-3 space-y-2 w-full text-xs">
        <label class="font-semibold text-white py-2">add songs<abbr title="required">*</abbr></label>
        <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
        <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" />
        <input type="number" name="songs_id[]" id="playlist_songs" data-id="" class="hidden">
        @if($playlists && count($playlists))
        <ul>
            @foreach($playlists as $playlist)
                <li class="text-xl text-white cursor-pointer" id="songs" onclick="addSongToInput('{{ $playlist->playlist_name }}', '{{$playlist->id}}')">{{ $playlist->playlist_name }}</li>
            @endforeach
        </ul>
        @endif
        <div>
            <span class="text-xl font-semibold text-purple-500">Selected Songs</span>
            <div id="Selected_songs" class="text-lg text-white cursor-pointer"></div>
        </div>
        <p class="text-red text-xs hidden">Please fill out this field.</p>

    </div>
    <script>
        let songsList = [];
        const selected_songs = document.getElementById('Selected_songs');
        const playlist_songs = document.getElementById('playlist_songs');

        const addSongToInput = (songName, songId) => {
            // if the song already exsite in the array 
            const exsitingSong = songsList.find((song) => song.songId === songId);
            if (exsitingSong) {
                return;
            }
            songsList.push(songId);

            const selectedSongElement = document.createElement('span');
            selectedSongElement.innerHTML = songName + '<span class="text-red-400" onclick="removeSong()" data-songId="`${songId}`"> X </span>' + '</br>';
            selected_songs.appendChild(selectedSongElement);


        }

        const removeSong = () => {
            const songElement = event.target.parentNode;
            const songId = songElement.dataset.songId;
            // remove the song from the songsList array
            const songIndex = songsList.findIndex((song) => song.songId === songId);
            songsList.splice(songIndex, 1);
            // remove the song from the DOM
            songElement.remove();
            // update the playlist_songs input with the updated songsList
            playlist_songs.value = JSON.stringify(songsList);
        }
    </script>