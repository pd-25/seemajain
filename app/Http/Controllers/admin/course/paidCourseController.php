<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class paidCourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        $applycount = CourseRequest::count();
        return view('admin.course.paid_course.index', compact('courses','applycount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.paid_course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            // 'slug' => 'required|string',
            'duration' => 'nullable|string|max:100',
            'skill_level' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:50',
            'sale_price' => 'nullable|numeric|min:0',
            'regular_price' => 'nullable|numeric|min:0',
            'overview' => 'nullable|string',
            'curriculum' => 'nullable|string',
            'instructor' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Image validation
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('paid_courses', 'public');
        }

        // Create a new paid course
        Course::create($validated);

        // Redirect to the index page with success message
        return redirect()->route('paid-courses.index')
                         ->with('success', 'Paid course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)

    {
        $course = Course::findOrFail($id);
        return view('admin.course.paid_course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the course by ID or fail if not found
        $course = Course::findOrFail($id);

        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string', // Exclude current slug
            'duration' => 'nullable|string|max:100',
            'skill_level' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:50',
            'sale_price' => 'nullable|numeric|min:0',
            'regular_price' => 'nullable|numeric|min:0',
            'overview' => 'nullable|string',
            'curriculum' => 'nullable|string',
            'instructor' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Image validation
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }

            // Store the new image and add the path to the validated data
            $validated['image'] = $request->file('image')->store('paid_courses', 'public');
        }

        // Update the course with validated data
        $course->update($validated);

        // Redirect back to the courses index page with success message
        return redirect()->route('paid-courses.index')
                         ->with('success', 'Paid course updated successfully!');
    }

    
    public function destroy($id)
    {
        // Find the course by ID or fail if not found
        $course = Course::findOrFail($id);

        // Delete the image from storage if exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        // Delete the course from database
        $course->delete();

        // Redirect back to the courses index page with success message
        return redirect()->route('paid-courses.index')
                         ->with('success', 'Paid course deleted successfully!');
    }

    public function show($id)

    {
        $service = Course::find($id);
        $bookings = CourseRequest::where('course_id', $id)->orderBy('id','desc')->paginate ('10');
        return view('admin.course.paid_course.booking', compact('bookings','service'));
    }
    public function bookingdestroy($id)
    {
        try {
            $booking = CourseRequest::findOrFail($id);
            $booking->delete();

            return response()->json([
                'success' => true,
                'message' => 'Booking deleted successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the booking.',
            ], 500);
        }
    }
}
