<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use Livewire\Component;

class PlaylistSearch extends Component
{
    public $searchQuery;
    public $playlists;
    public $playlistSongs = [];
    protected $rules = [
        'searchQuery' => 'required|min:3'
    ];

   
    public function search() : void
     {
        $this->validate();
        $this->playlists = Playlist::where('playlist_name', 'like', '%'.$this->searchQuery.'%')->get();

        if ($this->playlists->isEmpty()) {
            session()->flash('message', 'No results found for "' . $this->searchQuery . '".');
        }
    }
    public function render() {
        if($this->playlists) {
            return view('livewire.playlist-search', ['playlists' => $this->playlists]);
        }else {
            return view('livewire.playlist-search', ['playlists' => "There's no song with that name"]);
        }
    }


}



