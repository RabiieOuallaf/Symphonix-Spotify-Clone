<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    // load dashbaord for the admin
    public function dashbaordPage() {
        $musicModel = new Music();
        $musics = $musicModel::all();
        return view('admin.dashbaord',['musics' => $musics]);
    }
    // === Music === //

    //load the add music page 
    public function addMusicPage() {
        return view('admin.music.addMusic');
    }
    // load the update music page 
    public function updateMusicPage(Music $music) {
        return view('admin.music.updateMusic', ['music' => $music]);
    }

    // === Artiste === //

    public function dashbaordArtistePage() {
        return view('admin.artiste.artisteDashbaord');
    }
    public function addAritstePage() {  
        return view('admin.artiste.addArtiste');
    }
    
}
