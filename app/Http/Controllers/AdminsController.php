<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Artiste;
use App\Models\Band;
use App\Models\Comment;
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
        $artisteModel = new Artiste();
        $artistes = $artisteModel::all();
        return view('admin.artiste.artisteDashbaord', ['artistes' => $artistes]);
    }
    public function addAritstePage() {  
        return view('admin.artiste.addArtiste');
    }
    public function updateArtistePage(Artiste $artiste) {
        return view('admin.artiste.updateArtiste', ['artiste' => $artiste]);
    }
    
    // === Band === // 
    public function dashbaordBand() {
        $bandModel = new Band();
        $bands = $bandModel::all();
        return view('admin.band.bandDashbaord', ['bands' => $bands]);
    }
    public function addBandPage() {
        return view('admin.band.addBand');
    }
    public function updateBandPage(Band $band) {
        return view('admin.band.updateBand', ['band' => $band]);
    }

    // === Comments === //

    public function dashbaordComment() {
        $comments = Comment::all();
        return view('admin.comment.commentDashbaord', ['comments' => $comments]);
    }
}
