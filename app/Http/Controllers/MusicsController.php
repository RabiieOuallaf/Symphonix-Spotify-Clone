<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicsController extends Controller
{
    // display the music page 
    public function displayMusic() {
        return view('music.musicPage');
    }
    // ==== ***  MUSIC CRUD *** === //

    public function create(Request $request) {
        $formFields = $request->validate([
            'song_name' => ['required', 'min:3'],
            'layrics_writer' => ['required', 'min:3'],
            'song_langauge' => ['required', 'min:3'],
            'brand_artiste_website' => ['required', 'min:3'],
            'artist_name' => ['required','min:3'],
            'creating_date' => ['required', 'min:3'],
            'music_banner' => 'required'
        ]);
        if($request->hasFile('music_banner')){
            $formFields['music_banner'] = $request->file('music_banner')->store('public/images/upload/banners', 'public');
           
        }
        $Music = new Music();
        if(Music::create($formFields)){
            return redirect('/dashbaord')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }
 

}
