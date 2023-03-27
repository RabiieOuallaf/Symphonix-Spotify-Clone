<?php

namespace App\Http\Livewire;

use App\Models\Music;
use Livewire\Component;

class GeneralSearch extends Component
{
    public $searchQuery;
    public $results;
    
    protected $rules = [
        'searchQuery' => 'required|min:3'
    ];
    public function search() : void
     {
         $this->validate();
         $this->results = Music::where(function($query) {
            $query->where('song_name', 'like', '%'.$this->searchQuery.'%')
                  ->orWhere('artist_name', 'like', '%'.$this->searchQuery.'%');
        })->get();

        if ($this->results->isEmpty()) {
            session()->flash('message', 'No results found for "' . $this->searchQuery . '".');
        }
    }
    public function render() {
        if($this->results) {
            return view('explore', ['results' => $this->results]);
        }else {
            return view('livewire.general-search', ['results' => "There's no song with that name"]);
        }
    }
}
