<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeVideo extends Model
{
    use HasFactory;

    

    // Define the fillable fields
    protected $fillable = [
        'title',
        'youtube_link',
        'type',
    ];
}
