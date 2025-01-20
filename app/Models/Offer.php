<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title',
        'description',
        'course_ids',
        'status',
    ];

    // Cast `course_ids` to an array automatically
    protected $casts = [
        'course_ids' => 'array',
    ];

    /**
     * Add a course ID to the course_ids array.
     *
     * @param int $courseId
     * @return void
     */
    public function addCourseId(int $courseId)
    {
        $courseIds = $this->course_ids ?? [];
        if (!in_array($courseId, $courseIds)) {
            $courseIds[] = $courseId;
            $this->course_ids = $courseIds;
            $this->save();
        }
    }

    /**
     * Remove a course ID from the course_ids array.
     *
     * @param int $courseId
     * @return void
     */
    public function removeCourseId(int $courseId)
    {
        $courseIds = $this->course_ids ?? [];
        if (($key = array_search($courseId, $courseIds)) !== false) {
            unset($courseIds[$key]);
            $this->course_ids = array_values($courseIds);
            $this->save();
        }
    }

    /**
     * Check if a course ID exists in the course_ids array.
     *
     * @param int $courseId
     * @return bool
     */
    public function hasCourseId(int $courseId): bool
    {
        return in_array($courseId, $this->course_ids ?? []);
    }



    public function courses()
    {
        return $this->hasMany(Course::class, 'id', 'course_ids');
    }
}
