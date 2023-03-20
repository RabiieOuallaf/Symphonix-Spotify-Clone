<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    public function createBand(Request $request) {
        $formFields = $request->validate([
            'band_name' => ['required', 'min:3'],
            'band_banner' => ['required', 'min:3'],
            'band_country' => ['required', 'min:3'],
            'band_creating_date' => ['required', 'min:3'],
            'memebers' => 'required'
        ]);
        if($request->hasFile('band_banner')) {
            $formFields['band_banner'] = $request->file('band_banner')->store('public/upload');
        }
        if(Band::create($formFields)) {
            return redirect('/bandDashbaord')->with('message', 'Artiste Added!');
        }else{
            dd($formFields);
        };
    }
}