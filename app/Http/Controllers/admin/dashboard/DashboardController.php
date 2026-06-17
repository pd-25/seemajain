<?php

namespace App\Http\Controllers\admin\dashboard;

use App\core\bookingregister\BookingRegisterInterface;
use App\core\member\MemberInterface;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\FreeVideo;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Member;
use App\Models\Offer;
use App\Models\Seo;

class DashboardController extends Controller
{
   
    public function dashboard(Request $request)
    {
        $paidCoursesCount = Course::count();
        $freeCoursesCount = FreeVideo::where('type', 1)->count();
        $servicesCount = Service::count();
        $blogsCount = Blog::count();
        $testimonialsCount = Testimonial::count();
        $testimonialVideosCount = FreeVideo::where('type', 2)->count();
        $membersCount = Member::count();
        $offersCount = Offer::count();
        $seoCount = Seo::count();

        return view('admin.dashboard.dashboard', compact(
            'paidCoursesCount',
            'freeCoursesCount',
            'servicesCount',
            'blogsCount',
            'testimonialsCount',
            'testimonialVideosCount',
            'membersCount',
            'offersCount',
            'seoCount'
        ));
    }
}
