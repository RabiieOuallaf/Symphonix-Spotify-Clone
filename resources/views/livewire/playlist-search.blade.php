    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="mb-3 space-y-2 w-full text-xs">
        <label class="font-semibold text-white py-2">add songs<abbr title="required">*</abbr></label>
        <!-- <input placeholder="Searching..." name="playlist_songs" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="search" > -->
        <input type="text" wire:model="searchQuery" wire:keyup="search" placeholder="Search..." class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" />
        @if($playlists && count($playlists))
            <select name="playlist_id">
                    @foreach($playlists as $playlist)
                    <option value="{{$playlist->id}}">{{ $playlist->playlist_name }}</option>
                    @endforeach
            </select>

        @endif
        <div>
            <span class="text-xl font-semibold text-purple-500">Selected Songs</span>
            <div id="Selected_songs" class="text-lg text-white cursor-pointer"></div>
        </div>
        <p class="text-red text-xs hidden">Please fill out this field.</p>

    </div>
