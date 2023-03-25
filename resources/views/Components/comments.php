<?php

    namespace App\View\Components;
    use Illuminate\Console\View\Components\Component;


    class Comments extends Component {
        public function render()
        {
            return view('Components.comments');
        }
    }