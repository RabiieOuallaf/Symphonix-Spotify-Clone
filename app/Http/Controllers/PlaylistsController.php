<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function playlistPage() {
        return view('playlist.playlistsPage');
    }
    public function createPlaylistPage() {
        return view('playlist.createPlaylistPage');
    }
    public function createPlaylist(Request $request) {
    }
}
