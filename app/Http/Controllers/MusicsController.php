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
    // == Create == //
    public function createMusic(Request $request) {
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
            $formFields['music_banner'] = $request->file('music_banner')->store('public/upload');
           
        }
        if(Music::create($formFields)){
            return redirect('/dashbaord')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }
    // The read method is loaded by the admin controller since it's responsible of loading dashbaord pages

    // === Update === //
    public function updateMusic(Request $request , Music $music) {
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
        if($music->update($formFields)){
            return redirect('/dashbaord')->with('message', 'Song has been added successfully!');
        }else{
            dd('something went wrong!');
        };
    }
    // === Delete === // 
    public function deleteMusic(Music $music) {
        $music->delete();
        return redirect('/dashbaord')->with('message', 'Music deleted !');
   }

}
