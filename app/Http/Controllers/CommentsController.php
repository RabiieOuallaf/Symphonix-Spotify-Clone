<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function addComment(Request $request) {
        $formFields = $request->validate([
            'comment' => ['required', 'min:3'],
            'comment_creator' => 'required|email',
            'music_id' => 'required'
        ]);
        if(Comment::create($formFields)) {
            return redirect('/');
        };
    }
    
}
