<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseRequest;
use App\Models\FreeVideo;
use App\Models\Member;
use App\Models\Seo;
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
        $seo = Seo::where('page_name','home')->first();
        return view("frontend.index",compact("testimonials","courses","members","blogs","seo"));
    }

    //course 
    public function course(){
        $courses = Course::orderBy("id", "desc")->get();
        $seo = Seo::where('page_name','course')->first();
        return view("frontend.course.index",compact("courses","seo"));
    }

    public function courseDetail($slug){
        $course = Course::where("slug",$slug)->first();
        $seo = $course;
        return view("frontend.course.courseDetails" ,compact("course","seo"));

    }
    public function freeCourse(){
        $course = FreeVideo::where('type','1')->orderBy("id", "desc")->get();
        $seo = Seo::where('page_name','free-course')->first();
    return view('frontend.course.freeCourse',compact('course','seo'));
    }

    //service
    public function services(){
        $services = Service::orderBy("id", "desc")->get();
        $seo = Seo::where('page_name','services')->first();
        return view('frontend.service',compact('services','seo'));
    }

    //blogs
    public function blogs(){
        $blogs = Blog::orderBy("id", "desc")->get();
        $seo = Seo::where('page_name','blog')->first();
        return view('frontend.blog.index',compact('blogs','seo'));
    }
    public function blogDetails($slug)
    {
        // Fetch the main blog
        $blog = Blog::where('slug', $slug)->firstOrFail();
    
        // Fetch related blogs (e.g., same category or other criteria)
        $relatedBlogs = Blog::where('id', '!=', $blog->id) // Exclude the current blog
            ->take(5) // Limit to 5 related blogs
            ->get();
    $seo = $blog;
        return view('frontend.blog.blogDetails', compact('blog', 'relatedBlogs','seo'));
    }
    

    //about
    public function about(){
        $members = Member::orderBy("id","desc")->take(3)->get();
        $blogs = Blog::orderBy("id","desc")->take(3)->get();
        $testimonials = Testimonial::all();
        $seo = Seo::where('page_name','about-us')->first();
        return view('frontend.about', compact('members','blogs','testimonials','seo'));
    }

    //testimonial
    public function testimonial(){
        $videos = FreeVideo::where('type','2')->take(3)->get();
        $testimonials = Testimonial::all();
        $seo = Seo::where('page_name','testimonial')->first();
        return view('frontend.testiminal',compact('testimonials','videos','seo'));
    }

    //contact
    public function contact(){
        $seo = Seo::where('page_name','contact')->first();
        return view('frontend.contact',compact('seo'));
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
