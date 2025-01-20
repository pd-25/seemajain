<?php

namespace App\Http\Controllers\admin\offer;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Course;
use App\Models\Offer;
use Illuminate\Http\Request;

class offerController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offerData = Offer::paginate(10); // Paginate the data
        return view('admin.offer.index', compact('offerData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courceData=Course::select('id','title')->get();
        return view('admin.offer.create', compact('courceData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        
        $request->validate([
            'offer_title' => 'required|string|max:255',
            'offer_description' => 'required|string|max:500',
            'offer_percentage' => 'required|max:11',
            'course_id' => 'required',
            'offer_status' => 'required',
        ]);

        Offer::create($request->all());

        return redirect()->route('offer.index')->with('msg', 'Offer data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $seoData = Seo::findOrFail($id);
        return view('admin.seo.show', compact('seoData')); // Optional, if you need a show page
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courceData=Course::select('id','title')->get();
        $offerData = Offer::findOrFail($id);
        return view('admin.offer.edit', compact('offerData','courceData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'offer_title' => 'required|string|max:255',
            'offer_description' => 'required|string|max:500',
            'offer_percentage' => 'required|max:11',
            'course_id' => 'required',
            'offer_status' => 'required',
        ]);

        $offerData = Offer::findOrFail($id);
        $offerData->update($request->all());

        return redirect()->route('offer.index')->with('msg', 'Offer data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offerData = Offer::findOrFail($id);
        $offerData->delete();

        return redirect()->route('offer.index')->with('msg', 'Offer data deleted successfully.');
    }
}
