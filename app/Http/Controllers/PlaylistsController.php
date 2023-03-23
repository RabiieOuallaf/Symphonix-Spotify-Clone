<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function playlistPage() {
        return view('playlist.playlistsPage');
    }
    public function createPlaylistPage() {
        return view('playlist.createPlaylistPage');
    }
    public function createPlaylistWithSongs(Request $request) {
        $formFields = $request->validate([
            'playlist_banner' => 'required',
            'creator_email' => ['required', 'min:3'],
            'playlist_name' => ['required', 'min:3']
        ]);
        $Playlist = Playlist::create($formFields);
        if($request->hasFile('playlist_banner')){
            $formFields['playlist_banner'] = $request->file('playlist_banner')->store('public/upload');
           
        }
        $songs = Music::find(1);
        $Playlist->music()->attach($songs->id);

        return $Playlist->load('music');

        return redirect('/dashbaord')->with('message', 'Song has been added successfully!');

    }
    


}


