<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'artiste_name', // Mass assigemnt 
        'artiste_image', // Guared = to not fill a column 
        'artiste_country',
        'artiste_brithday'
    ];

    // // Define the relationship between classes // 

    public function music() {
        return $this->belongsToMany(Music::class);
    }
}
