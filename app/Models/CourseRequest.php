<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CourseRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'location',
        'message',
        'course_id',
    ];

    /**
     * Get the service that owns the service request.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
