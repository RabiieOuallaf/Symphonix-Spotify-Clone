<?php

namespace App\Http\Livewire;

use App\Models\Music;
use Livewire\Component; 

class SongsSearch extends Component
{
    public $searchQuery;
    public $songs;

    
    protected $rules = [
        'searchQuery' => 'required|min:3'
    ];

    
    public function search() : void
     {
         $this->validate();
        $this->songs = Music::where('song_name', 'like', '%'.$this->searchQuery.'%')->get();

        if ($this->songs->isEmpty()) {
            session()->flash('message', 'No results found for "' . $this->searchQuery . '".');
        }
    }
    public function render() {
        if($this->songs) {
            return view('livewire.songs-search', ['songs' => $this->songs]);
        }else {
            return view('livewire.songs-search', ['songs' => "There's no song with that name"]);
        }
    }
    
}
