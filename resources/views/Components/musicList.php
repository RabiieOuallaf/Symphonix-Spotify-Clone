<?php

    namespace App\View\Components;
    use Illuminate\Console\View\Components\Component;


    class Playlist extends Component {
        public $musics;

        public function render()
        {
            $musics = $this->musics;
            return view('Components.playlist' , ['music' => $musics]);
        }
    }