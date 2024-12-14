<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\DisputeLetterController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    
    // Route::resource('/operation-schemes', OperationSchemesController::class);
    // Route::resource('/register-bookings', RegisterBookingController::class);
    // Route::resource('/booking-types', BookingTypesController::class);
    // Route::get('/check-patient-privious-bookings', [RegisterBookingController::class, 'checkPatientPriviousBooking'])->name('admin.checkPatientPriviousBooking');
    // Route::get('/check-bookingtype-operation', [RegisterBookingController::class, 'checkIfBookingTypeOperation'])->name('admin.checkIfBookingTypeOperation');
    // Route::post('/update-payment/{register_booking_slug}', [RegisterBookingController::class, 'updatePayment'])->name('admin.updatePayment');
    // Route::resource('/expenditure-manages', ExpenditureController::class);



    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});
//these routes is common for both employee and admin
// Route::get('/check-patient-privious-bookings', [RegisterBookingController::class, 'checkPatientPriviousBooking'])->name('admin.checkPatientPriviousBooking');
// Route::get('/check-bookingtype-operation', [RegisterBookingController::class, 'checkIfBookingTypeOperation'])->name('admin.checkIfBookingTypeOperation');
// Route::get('/get-print/{slug}',[RegisterBookingController::class, 'getPrint'])->name("get-print");
// Route::get('/get-pescription-print/{slug}',[RegisterBookingController::class, 'getPescriptionPrint'])->name("get-pescription-print");

// Route::post('/save-pescription/{slug}', [RegisterBookingController::class, 'savePescription'])->name('admin.savePescription');

// Route::get('/expenditure-export', [ExpenditureController::class, 'export'])->name('expenditure.download');


