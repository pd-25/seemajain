<?php

use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
require __DIR__ . '/admin.php';

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [frontendController::class, 'index'])->name('home');
Route::get('courses', [frontendController::class, 'course'])->name('course');
Route::get('courses/{slug}', [frontendController::class, 'courseDetail'])->name('courseDetail');
Route::post('applycourse', [frontendController::class, 'courseApply'])->name('applycourse');
Route::get('free-courses', [frontendController::class, 'freeCourse'])->name('freeCourse');
Route::get('services', [frontendController::class, 'services'])->name('services');
Route::post('bookingstore', [frontendController::class, 'bookingstore'])->name('bookingstore');
Route::get('blogs', [frontendController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [frontendController::class, 'blogDetails'])->name('blogDetails');
Route::get('about-us', [frontendController::class, 'about'])->name('about');
Route::get('testimonial', [frontendController::class,   'testimonial'])->name('testimonial');
Route::get('contact-us', [frontendController::class, 'contact'])->name('contact');