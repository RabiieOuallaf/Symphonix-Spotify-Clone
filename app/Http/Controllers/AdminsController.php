<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    // load dashbaord for the admin
    public function dashbaordPage() {
        return view('admin.dashbaord');
    }
    //load the add music page 
    public function addMusicPage() {
        return view('admin.addMusic');
    }
}
