<div class="mb-3 space-y-2 w-full text-xs" >
    <label class="font-semibold text-white py-2">add songs<abbr title="required">*</abbr></label>
    <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
    <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..."  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" /> 
    <input type="number" name="songs_id" id="playlist_songs" class="hidden">
    @if($songs && count($songs))
        <ul>
            @foreach($songs as $song)
                <li class="text-xl text-white cursor-pointer" id="songs" onclick="addSongToInput('{{ $song->song_name }}', '{{$song->id}}')">{{ $song->song_name }}</li>
            @endforeach
        </ul>
    @endif
    <div>
        <span class="text-xl font-semibold text-purple-500">Selected Songs</span>
        <div id="Selected_songs"  class="text-lg text-white cursor-pointer"></div>
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
        if(exsitingSong) {
            return;
        }
        songsList.push({
            'songName' : songName,
            'songId': songId
        });
        playlist_songs.value = songsList[0].songId;
        // add the selected song name to the selected_songs element
        const selectedSongElement = document.createElement('span');
        selectedSongElement.innerHTML = songName + '<span class="text-red-400" onclick="removeSong()" data-songId="`${songId}`"> X </span>' + '</br>' ;
        selected_songs.appendChild(selectedSongElement);
    }
    
    function removeSong() {
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
