<?php

    namespace App\View\Components;
    use Illuminate\Console\View\Components\Component;


    class Sidebar extends Component {
        public function render()
        {
            return view('Components.sidebar');
        }
    }