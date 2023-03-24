<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Main() {
        $Music = Music::all();
        return view('main', ['musics' => $Music]);
    }
}
