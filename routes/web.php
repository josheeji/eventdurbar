<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\DashboardController as AuthDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EventCertificateTemplateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ParticipantTypeController;
use App\Models\ParticipantType;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::get('/', function () {
    return view('layouts.frontend.inc.master');
});


Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

    Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
});
Route::get('admin/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth');

Route::post('admin/logout', [CustomAuthController::class, 'signOut'])->name('signout')->middleware('auth');






//frontend


// Route::get('/home', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/home', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/events/{id}/download/certificates', [App\Http\Controllers\Frontend\FrontendController::class, 'downloadPdf']);
Route::get('/events/{id}/detail', [App\Http\Controllers\Frontend\FrontendController::class, 'detail']);


// Route::prefix('admin')->middleware(['auth'])->group(function () {




Route::prefix('admin/event-types')->middleware('auth')->group(function () {
    Route::get('/', [EventTypeController::class, 'index']);
    Route::get('/create', [EventTypeController::class, 'create']);
    Route::post('/', [EventTypeController::class, 'store']);
    Route::get('/{id}/edit', [EventTypeController::class, 'edit']);
    Route::put('/{id}', [EventTypeController::class, 'update']);
    Route::delete('/{id}', [EventTypeController::class, 'destroy']);
});


Route::prefix('admin/events')->middleware('auth')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::get('/create', [EventController::class, 'create']);
    Route::post('/', [EventController::class, 'store']);
    Route::get('/{id}/edit', [EventController::class, 'edit']);
    Route::put('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});

Route::prefix('/admin/event-templates')->middleware('auth')->group(function () {
    Route::get('/', [EventCertificateTemplateController::class, 'index']);
    Route::get('/create', [EventCertificateTemplateController::class, 'create']);
    Route::post('/', [EventCertificateTemplateController::class, 'store']);
    Route::get('/{id}/edit', [EventCertificateTemplateController::class, 'edit']);
    Route::put('/{id}', [EventCertificateTemplateController::class, 'update']);
    Route::delete('/{id}', [EventCertificateTemplateController::class, 'destroy']);
});

Route::get(
    '/admin/event-templates/{id}/download-pdf',
    [EventCertificateTemplateController::class, 'generatePdf']
);



Route::prefix('/admin/participant-types')->middleware('auth')->group(function () {
    Route::get('/', [ParticipantTypeController::class, 'index']);
    Route::get('/create', [ParticipantTypeController::class, 'create']);
    Route::post('/', [ParticipantTypeController::class, 'store']);
    Route::get('/{id}/edit', [ParticipantTypeController::class, 'edit']);
    Route::put('/{id}', [ParticipantTypeController::class, 'update']);
    Route::delete('/{id}', [ParticipantTypeController::class, 'destroy']);
});


Route::prefix('/admin/participants')->middleware('auth')->group(function () {
    Route::get('/', [ParticipantController::class, 'index']);
    Route::get('/import', [ParticipantController::class, 'importExcel']);
    Route::post('/upload-excel-file', [ParticipantController::class, 'storeExcel']);
    // Route::get('/export', [ParticipantController::class, 'export'])->name('participants.export');
    Route::get('/create', [ParticipantController::class, 'create']);
    Route::post('/', [ParticipantController::class, 'store']);
    Route::get('/{id}/edit', [ParticipantController::class, 'edit']);
    Route::put('/{id}', [ParticipantController::class, 'update']);
    Route::delete('/{id}', [ParticipantController::class, 'destroy']);
});

Route::get(
    '/admin/participants/{id}/download-pdf',
    [ParticipantController::class, 'generatePdf']
);


Route::get('/manage-site', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed');
});
