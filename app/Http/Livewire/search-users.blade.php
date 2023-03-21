<div class="mb-3 space-y-2 w-full text-xs">
    <label class="font-semibold text-white py-2">add songs<abbr title="required">*</abbr></label>
    <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
    <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" /> 
    @livewire('SongsSearch')
    @if($songs && count($songs))
        <ul>
            @foreach($songs as $song)
                <li>{{ $song->song_name }}</li>
            @endforeach
        </ul>
    @endif
    <p class="text-red text-xs hidden">Please fill out this field.</p>
</div>