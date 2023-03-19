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
    //load the add music page 
    public function addMusicPage() {
        return view('admin.addMusic');
    }
}
