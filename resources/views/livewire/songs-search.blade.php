<div class="mb-3 space-y-2 w-full text-xs">
    <label class="font-semibold text-white py-2">add songs<abbr title="required">*</abbr></label>
    <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
    <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" /> 
    @if($songs && count($songs))
        <ul>
            @foreach($songs as $song)
                <li class="text-xl text-white cursor-pointer" id="songs" onclick="addSongToInput('{{ $song->song_name }}', '{{$song->id}}')">{{ $song->song_name }}</li>
            @endforeach
        </ul>
    @endif'
    <p class="text-red text-xs hidden">Please fill out this field.</p>
    <script src="{{asset('js/songs.js')}}"></script>

</div>
<script>
    let songsList = [];
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
        console.log(songsList);
        

    
    }

    
</script>
