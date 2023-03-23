<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'playlist_banner', 
        'creator_email',
        'playlist_name' 
    ];
     //Define the relationship between classes 
     public function music() {
        return $this->belongsToMany(music::class);
    }
}
