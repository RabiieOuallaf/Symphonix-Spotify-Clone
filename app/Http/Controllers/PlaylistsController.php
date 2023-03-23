<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function playlistPage(Playlist $playlist) {
        $Playlist = $playlist::all();
        return view('playlist.playlistsPage', ['playlists' => $Playlist]);
    }
    public function createPlaylistPage() {
        return view('playlist.createPlaylistPage');
    }

    public function createPlaylistWithSongs(Request $request) {
        dd($request->all());
        $formFields = $request->validate([
            'playlist_banner' => 'required',
            'creator_email' => ['required', 'min:3'],
            'playlist_name' => ['required', 'min:3'],
            'songs_id' => 'required|array|min:1'
        ]);
        $Playlist = Playlist::create($formFields);
        if($request->hasFile('playlist_banner')){
            $formFields['playlist_banner'] = $request->file('playlist_banner')->store('public/upload');
            
        }
        $songs = Music::find($formFields['songs_id']);
        $Playlist->music()->attach($songs->id);


        return redirect('/playlists')->with('message', 'Song has been added successfully!');
    }

    public function createPlaylist(Request $request) {
        $formFields = $request->validate([
            'playlist_banner' => 'required',
            'creator_email' => ['required', 'min:3'],
            'playlist_name' => ['required', 'min:3']
        ]);

        if($request->hasFile('playlist_banner')){
            $formFields['playlist_banner'] = $request->file('playlist_banner')->store('public/upload');
           
        }
        if(Playlist::create($formFields)){
            return redirect('/')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }

    
    


}


