<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Likes;
use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicsController extends Controller
{
    // display the music page 
    public function displayMusicPage()
    {
        return view('music.musicPage');
    }
    // Display one music  
    public function displayMusic(Music $music)
    {
        return view('music.music', ['music' => $music], ['comments' => $music->comments]);
    }

    // load add to playlist page

    public function addToPlaylistPage(Music $music)
    {
        return view('music.addToPlaylist', ['music' => $music]);
    }

    // ==== ***  MUSIC CRUD *** === //

    // == Create == //
    public function createMusic(Request $request)
    {
        $formFields = $request->validate([
            'song_name' => ['required', 'min:3'],
            'layrics_writer' => ['required', 'min:3'],
            'song_langauge' => ['required', 'min:3'],
            'brand_artiste_website' => ['required', 'min:3'],
            'artist_name' => ['required', 'min:3'],
            'creating_date' => ['required', 'min:3'],
            'music_banner' => 'required',
            'music_audio' => 'required|mimes:mp3,wav'
        ]);
        if ($request->hasFile('music_banner')) {
            $formFields['music_banner'] = $request->file('music_banner')->store('public/upload');
        }
        if ($request->hasFile('music_audio')) {
            $formFields['music_audio'] = $request->file('music_audio')->store('public/audio');
        }
        if (Music::create($formFields)) {
            return redirect('/dashbaord')->with('message', 'Song has been added successfully!');
        } else {
            dd('something went wrong!');
        };
    }
    // The read method is loaded by the admin controller since it's responsible of loading dashbaord pages

    // === Update === //
    public function updateMusic(Request $request, Music $music)
    {
        $formFields = $request->validate([
            'song_name' => ['required', 'min:3'],
            'layrics_writer' => ['required', 'min:3'],
            'song_langauge' => ['required', 'min:3'],
            'brand_artiste_website' => ['required', 'min:3'],
            'artist_name' => ['required', 'min:3'],
            'creating_date' => ['required', 'min:3'],
            'music_banner' => 'required'
        ]);
        if ($request->hasFile('music_banner')) {
            $formFields['music_banner'] = $request->file('music_banner')->store('public/upload');
        }
        if ($music->update($formFields)) {
            return redirect('/dashbaord')->with('message', 'Song has been added successfully!');
        } else {
            dd('something went wrong!');
        };
    }
    // === Delete === // 
    public function deleteMusic(Music $music)
    {
        $music->delete();
        return redirect('/dashbaord')->with('message', 'Music deleted !');
    }
    // === Like == // 
    public function likeSong(Request $request)
    {
        $formFields = $request->validate([
            'user_id' => 'required',
            'music_id' => 'required'
        ]);
        $user = User::find($formFields['user_id']);
        if($user->hasLikedSong($formFields['music_id'])){
            $music = Likes::where('music_id', $formFields['music_id'])->first();
            $music->delete();
        }else{

            Likes::create($formFields);
        }

        return redirect()->back();
    }

   

    
}
