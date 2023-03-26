<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'comment_creator',
        'music_id'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
    public function musics() {
        return $this->belongsTo(Music::class);
    }
}
