<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;



class Music extends Model
{
    use HasFactory;
    protected $fillable = [
        'artist_name', 
        'song_name',
        'song_langauge',
        'creating_date',
        'layrics_writer', 
        'brand_artiste_website',
        'music_banner'
        
    ];
        // Define the relationship between classes // 
    // public function playlist() {
    //     return $this->belongsToMany(Playlist::class);
    // }
}
