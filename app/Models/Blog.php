<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    

    // Define the fillable fields
    protected $fillable = [
        'title',
        'image_path',
        'description',
        'meta_title',
        'meta_description',
        'hederscript',
    ];
    protected static function booted()
{
    static::creating(function ($blog) {
        $blog->slug = Str::slug($blog->title);
    });

    static::updating(function ($blog) {
        $blog->slug = Str::slug($blog->title);
    });
}
}
