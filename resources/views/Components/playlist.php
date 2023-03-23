<?php

    namespace App\View\Components;
    use Illuminate\Console\View\Components\Component;


    class Playlist extends Component {
        public $playlists;

        public function render()
        {
            $playlists = $this->playlists;
            return view('Components.playlist' , ['playlists' => $playlists]);
        }
    }