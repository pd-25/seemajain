<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use App\Models\FreeVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class freeCourseController extends Controller
{


    private function isTestimonialRoute()
    {
        return Route::is('testimonial-video*');
    }

    private function getType()
    {
        return $this->isTestimonialRoute() ? 2 : 1;
    }

    private function getViewPath($view)
    {
        return $this->isTestimonialRoute()
            ? "admin.testimonialVideo.$view"
            : "admin.course.free_course.$view";
    }

    public function index()
    {
        $videos = FreeVideo::where("type", $this->getType())
            ->orderBy("created_at", "desc")
            ->paginate(10);

        return view($this->getViewPath('index'), compact('videos'));
    }

    public function create()
    {
        return view($this->getViewPath('create'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|string|max:255',
            'type' => 'nullable|string|max:50',
        ]);

        $validatedData['type'] = $validatedData['type'] ?? $this->getType();

        FreeVideo::create($validatedData);

        return redirect()->route(
            $this->isTestimonialRoute() ? 'testimonial-video.index' : 'free-courses.index'
        )->with('success', $this->isTestimonialRoute() ? 'Testimonial Video created successfully' : 'Free Course created successfully');
    }

    public function show(FreeVideo $freeVideo)
    {
        return response()->json($freeVideo);
    }

    public function edit($id)
    {
        $freeVideo = FreeVideo::findOrFail($id);

        return view($this->getViewPath('edit'), compact('freeVideo'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|string|max:255',
            'type' => 'nullable|string|max:50',
        ]);

        $validatedData['type'] = $validatedData['type'] ?? $this->getType();

        $freeVideo = FreeVideo::findOrFail($id);
        $freeVideo->update($validatedData);

        return redirect()->route(
            $this->isTestimonialRoute() ? 'testimonial-video.index' : 'free-courses.index'
        )->with('success', $this->isTestimonialRoute() ? 'Testimonial Video updated successfully' : 'Free Course updated successfully');
    }

    public function destroy($id)
    {
        $freeVideo = FreeVideo::findOrFail($id);
        $freeVideo->delete();

        return redirect()->route(
            $this->isTestimonialRoute() ? 'testimonial-video.index' : 'free-courses.index'
        )->with('success', $this->isTestimonialRoute() ? 'Testimonial Video deleted successfully' : 'Free Course deleted successfully');
    }
}
