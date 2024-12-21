<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'courses';

    // Define the fillable attributes to prevent mass-assignment vulnerabilities
    protected $fillable = [
        'title',
        'slug',
        'duration',
        'skill_level',
        'language',
        'sale_price',
        'regular_price',
        'overview',
        'curriculum',
        'instructor',
        'image',
    ];

    // Specify any relationships this model might have (if any)
    // For example, if courses have many lessons, you might add a relationship like:
    // public function lessons()
    // {
    //     return $this->hasMany(Lesson::class);
    // }

    protected static function booted()
{
    static::creating(function ($course) {
        $course->slug = Str::slug($course->title);
    });

    static::updating(function ($course) {
        $course->slug = Str::slug($course->title);
    });
}

public function courseRequests()
{
    return $this->hasMany(CourseRequest::class);
}
}
