<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){

        return view("frontend.index");
    }

    //course 
    public function course(){
        return view("frontend.course.index");
    }

    public function courseDetail($slug){
        return view("frontend.course.courseDetails");

    }
    public function freeCourse(){
    return view('frontend.course.freeCourse');
    }

    //service
    public function services(){
        return view('frontend.service');
    }

    //blogs
    public function blogs(){
        return view('frontend.blog.index');
    }
    public function blogDetails($slug){
        return view('frontend.blog.blogDetails');

    }

    //about
    public function about(){
        return view('frontend.about');
    }

    //testimonial
    public function testimonial(){
        return view('frontend.testiminal');
    }

    //contact
    public function contact(){
        return view('frontend.contact');
    }
}
