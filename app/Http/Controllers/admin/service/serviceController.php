<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class serviceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);
        $bookingcount = ServiceRequest::count();
        return view('admin.services.index', compact('services','bookingcount'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('services/icons', 'public');
        }

        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('services/backgrounds', 'public');
        }

        Service::create($data);

        return redirect()->route('services.index')->with('msg', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('services/icons', 'public');
        }

        if ($request->hasFile('background_image')) {
            if ($service->background_image) {
                Storage::disk('public')->delete($service->background_image);
            }
            $data['background_image'] = $request->file('background_image')->store('services/backgrounds', 'public');
        }

        $service->update($data);

        return redirect()->route('services.index')->with('msg', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        if ($service->background_image) {
            Storage::disk('public')->delete($service->background_image);
        }

        $service->delete();

        return redirect()->route('services.index')->with('msg', 'Service deleted successfully.');
    }

    public function show($id)

    {
        $service = Service::find($id);
        $bookings = ServiceRequest::where('service_id', $id)->orderBy('id','desc')->paginate ('10');
        return view('admin.services.booking', compact('bookings','service'));
    }
    public function bookingdestroy($id)
    {
        try {
            $booking = ServiceRequest::findOrFail($id);
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
