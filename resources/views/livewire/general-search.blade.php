<div>
    {{-- Stop trying to control. --}}
    <livewire:styles />
    <livewire:scripts />
    <div class="search-section flex mx-5 my-4 w-[100%]">
        <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
        <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." class="w-[100%] h-8 p-5 text-white radius-full mx-10 rounded-md border-white border-2 border-white bg-inherit" required="required" />
        <input type="number" name="songs_id" id="playlist_songs" data-id="" class="hidden">
        @if($results && count($results))
        <ul>
            @foreach($results as $result)
                <li class="text-xl text-white cursor-pointer" id="songs" onclick="addSongToInput('{{ $result->song_name }}', '{{$result->id}}')">{{ $result->song_name }}</li>
            @endforeach
        </ul>
        @endif
        
    </div>
</div>