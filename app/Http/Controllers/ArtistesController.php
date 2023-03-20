<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use Illuminate\Http\Request;

class ArtistesController extends Controller
{
    // Crate method
    public function createArtiste(Request $request) {

        $formFields = $request->validate([
            'artiste_name' => ['required', 'min:3'],
            'artiste_image' => ['required', 'min:3'],
            'artiste_country' => ['required', 'min:3'],
            'artiste_brithday' => ['required', 'min:3']
        ]);
        if($request->hasFile('artiste_image')) {
            $formFields['artiste_image'] = $request->file('artiste_image')->store('public/upload');
        }
        if(Artiste::create($formFields)) {
            return redirect('/artisteDashbaord')->with('message', 'Artiste Added!');
        }else{
            dd($formFields);
        };
    
    }
    //Update method 
    public function updateArtiste(Request $request, Artiste $artiste ) {
        $formFields = $request->validate([
            'artiste_name' => ['required', 'min:3'],
            'artiste_image' => ['required', 'min:3'],
            'artiste_country' => ['required', 'min:3'],
            'artiste_brithday' => ['required', 'min:3']
        ]);
        if($request->hasFile('artiste_image')) {
            $formFields['artiste_image'] = $request->file('artiste_image')->store('public/upload');
        }
        if($artiste->update($formFields)) {
            return redirect('/artisteDashbaord')->with('message', 'Artiste updated!');
        }else{
            dd($formFields);
        };
    }

    // === Delete === // 
    public function deleteArtiste(Artiste $artiste) {
        $artiste->delete();
        return redirect('/artisteDashbaord')->with('message', 'Artiste deleted !');
   }
    
}
