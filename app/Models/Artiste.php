<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'artiste_name',
        'artiste_image',
        'artiste_country',
        'artiste_brithday'
    ];

    // // Define the relationship between classes // 

    public function music() {
        return $this->belongsToMany(Music::class);
    }
}
