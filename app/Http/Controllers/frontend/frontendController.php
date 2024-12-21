<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseRequest;
use App\Models\FreeVideo;
use App\Models\Member;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        $courses = Course::orderBy("id", "desc")->get();
        $members = Member::orderBy("id","desc")->take(3)->get();
        $blogs = Blog::orderBy("id","desc")->take(3)->get();
        return view("frontend.index",compact("testimonials","courses","members","blogs"));
    }

    //course 
    public function course(){
        $courses = Course::orderBy("id", "desc")->get();
        return view("frontend.course.index",compact("courses"));
    }

    public function courseDetail($slug){
        $course = Course::where("slug",$slug)->first();
        return view("frontend.course.courseDetails" ,compact("course"));

    }
    public function freeCourse(){
        $course = FreeVideo::where('type','1')->orderBy("id", "desc")->get();
    return view('frontend.course.freeCourse',compact('course'));
    }

    //service
    public function services(){
        $services = Service::orderBy("id", "desc")->get();
        return view('frontend.service',compact('services'));
    }

    //blogs
    public function blogs(){
        $blogs = Blog::orderBy("id", "desc")->all();
        return view('frontend.blog.index',compact('blogs'));
    }
    public function blogDetails($slug)
    {
        // Fetch the main blog
        $blog = Blog::where('slug', $slug)->firstOrFail();
    
        // Fetch related blogs (e.g., same category or other criteria)
        $relatedBlogs = Blog::where('id', '!=', $blog->id) // Exclude the current blog
            ->take(5) // Limit to 5 related blogs
            ->get();
    
        return view('frontend.blog.blogDetails', compact('blog', 'relatedBlogs'));
    }
    

    //about
    public function about(){
        $members = Member::orderBy("id","desc")->take(3)->get();
        $blogs = Blog::orderBy("id","desc")->take(3)->get();
        $testimonials = Testimonial::all();
        return view('frontend.about', compact('members','blogs','testimonials'));
    }

    //testimonial
    public function testimonial(){
        $videos = FreeVideo::where('type','2')->take(3)->get();
        $testimonials = Testimonial::all();
        return view('frontend.testiminal',compact('testimonials','videos'));
    }

    //contact
    public function contact(){
        return view('frontend.contact');
    }

    public function bookingstore(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'location' => 'required|string|max:255',
        'message' => 'nullable|string',
        'service_id' => 'required|exists:services,id',
    ]);

   
    // ServiceRequest::create($validated);

    try {
        // Create a new booking
        ServiceRequest::create($validated);

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Your booking request has been submitted successfully.',
        ]);
    } catch (\Exception $e) {
        // Handle any errors
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while processing your request. Please try again.',
        ], 500);
    }
}
public function courseApply(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'location' => 'required|string|max:255',
        'message' => 'nullable|string',
        'course_id' => 'required|exists:courses,id',
    ]);

   
    // ServiceRequest::create($validated);

    try {
        // Create a new booking
        CourseRequest::create($validated);

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Your booking request has been submitted successfully.',
        ]);
    } catch (\Exception $e) {
        // Handle any errors
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while processing your request. Please try again.',
        ], 500);
    }
}
}
