<?php

namespace App\Http\Controllers\admin\offer;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
{
    $offers = Offer::paginate(10); // Paginate offers with 10 per page

    $offers->getCollection()->transform(function ($offer) {
        $offer->courses = Course::whereIn('id', $offer->course_ids)->get();
        return $offer;
    });

    return view('admin.offers.index', compact('offers'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all(); // Fetch all courses
        return view('admin.offers.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'course_ids' => 'nullable|array',
            'course_ids.*' => 'exists:courses,id',
            'status' => 'required|in:active,inactive',
        ]);

        Offer::create([
            'title' => $request->title,
            'description' => $request->description,
            'course_ids' => $request->course_ids,
            'status' => $request->status,
        ]);

        return redirect()->route('offers.index')->with('msg', 'Offer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        $courses = Course::all(); // Fetch all courses
        return view('admin.offers.edit', compact('offer', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'course_ids' => 'nullable|array',
            'course_ids.*' => 'exists:courses,id',
            'status' => 'required|in:active,inactive',
        ]);

        $offer->update([
            'title' => $request->title,
            'description' => $request->description,
            'course_ids' => $request->course_ids,
            'status' => $request->status,
        ]);

        return redirect()->route('offers.index')->with('msg', 'Offer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.index')->with('msg', 'Offer deleted successfully.');
    }
}
