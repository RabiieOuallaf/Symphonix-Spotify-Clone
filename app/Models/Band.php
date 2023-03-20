<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class band extends Model
{
    use HasFactory;
    protected $fillable = [
        'band_name',
        'band_banner',
        'band_country',
        'band_creating_date',
        'memebers'
    ];
}
