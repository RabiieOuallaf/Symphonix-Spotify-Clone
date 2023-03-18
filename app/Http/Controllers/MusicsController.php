<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicsController extends Controller
{
    // display the music page 
    public function displayMusic() {
        return view('music.musicPage');
    }
}
