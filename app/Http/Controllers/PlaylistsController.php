<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    // Load the playlists page 
    public function playlistsPage(Playlist $playlist) {
        $Playlist = $playlist::all();
        return view('playlist.playlistsPage', ['playlists' => $Playlist]);
    }

    // load playlist page 
    public function playlistPage(Playlist $playlist) {
        $playlistWithSongs = $playlist->music;
        return view('playlist.playlist', ['playlists' => $playlist, 'songs' => $playlistWithSongs]);
    }
    // Load the create/add playlist page 
    public function createPlaylistPage() {
        return view('playlist.createPlaylistPage');
    }

    // Load the update page (Only the playlist)
    public function updatePlaylistPage(Playlist $playlist) {
        return view('playlist.updatePlaylistPage', ['playlist' => $playlist]);
    }

    // *** === CRUD === *** // 
    // create a playlist with song (insert the data to the pivot table musics_playlists)

    public function createPlaylistWithSongs(Request $request) {
        $formFields = $request->validate([
            'creator_email' => 'required',
            'playlist_id' => 'required',
            'song_id' => 'required'
        ]);
        
        $Playlist = Playlist::find($formFields['playlist_id']);
        $song = Music::find($formFields['song_id']);
        $Playlist->music()->attach($song->id);


        return redirect('/playlists')->with('message', 'Song has been added successfully!');
    }

    // Create an playlist

    public function createPlaylist(Request $request) {
        $formFields = $request->validate([
            'playlist_banner' => 'required',
            'creator_email' => ['required', 'min:3'],
            'playlist_name' => ['required', 'min:3']
        ]);
        if($request->hasFile('playlist_banner')){
            $formFields['playlist_banner'] = $request->file('playlist_banner')->store('public/upload/playlists');
        }
        if(Playlist::create($formFields)){
            return redirect('/')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }

    // update the playlist (only the playlist)
    
    public function updatePlaylist(Request $request, Playlist $playlist){
        $formFields = $request->validate([
            'playlist_banner' => 'required',
            'creator_email' => ['required','min:3'],
            'playlist_name' => ['required', 'min:3'],
        ]);
        if($request->hasFile('playlist_banner')){
            $formFields['playlist_banner'] = $request->file('playlist_banner')->store('public/upload/playlists');
           
        }
        if($playlist->update($formFields)){
            return redirect('/playlists')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }

    // Delete playlist 

    public function deletePlaylist(Playlist $playlist){
        $playlist->delete();
        return redirect('/playlists')->with('message', 'Playlist is deleted');
    }
}


