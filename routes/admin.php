<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\blog\blogController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\course\freeCourseController;
use App\Http\Controllers\admin\course\paidCourseController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\DisputeLetterController;
use App\Http\Controllers\admin\member\memberController;
use App\Http\Controllers\admin\offer\OfferController;
use App\Http\Controllers\admin\seo\seoController;
use App\Http\Controllers\admin\service\serviceController;
use App\Http\Controllers\admin\testimonial\testimonialController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');


    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::resource('free-courses', freeCourseController::class);
    Route::resource('testimonials', testimonialController::class);
    Route::resource('blogs', blogController::class);
    Route::resource('services', serviceController::class);
    Route::resource('paid-courses', paidCourseController::class);
    Route::resource('testimonial-video', freeCourseController::class);
    Route::resource('members', memberController::class);
    Route::delete('/booking/{id}', [serviceController::class, 'bookingdestroy'])->name('bookings.destroy');
    Route::delete('/course/{id}', [paidCourseController::class, 'bookingdestroy'])->name('course.destroy');
    Route::resource('seo', seoController::class);
    Route::resource('offers', OfferController::class);

});
