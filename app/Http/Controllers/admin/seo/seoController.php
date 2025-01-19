<?php

namespace App\Http\Controllers\admin\seo;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class seoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seoData = Seo::paginate(10); // Paginate the data
        return view('admin.seo.index', compact('seoData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'hederscript' => 'nullable|string',
        ]);

        Seo::create($request->all());

        return redirect()->route('seo.index')->with('msg', 'SEO data created successfully.');
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
        $seoData = Seo::findOrFail($id);
        return view('admin.seo.edit', compact('seoData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:500',
            'hederscript' => 'nullable|string',
        ]);

        $seoData = Seo::findOrFail($id);
        $seoData->update($request->all());

        return redirect()->route('seo.index')->with('msg', 'SEO data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $seoData = Seo::findOrFail($id);
        $seoData->delete();

        return redirect()->route('seo.index')->with('msg', 'SEO data deleted successfully.');
    }
}
