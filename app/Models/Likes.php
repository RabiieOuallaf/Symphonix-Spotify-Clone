<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    protected $fillable = [
        'music_id',
        'user_id'
    ];

    public function music() {
        return $this->belongsToMany(Music::class);
    }

    public function user() {
        return $this->belongsToMany(User::class);
    }
}
