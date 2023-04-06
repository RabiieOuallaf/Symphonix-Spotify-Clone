<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // === Comments crud === //
    // Create
    public function addComment(Request $request) {
        $formFields = $request->validate([
            'comment' => ['required', 'min:3'],
            'comment_creator' => 'required|email',
            'music_id' => 'required'
        ]);
        if(Comment::create($formFields)) {
            return redirect()->back();
        };
    }
    // Delte comment 
    public function deleteComment(Comment $comment) {
        $comment->delete();
        return redirect('/dashbaordComment')->with('comment deleted !');
    }   
    
    
}
