<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::prefix('retailers')->group(function(){
        Route::get('/', 'RetailerController@index');
        Route::post('load', 'RetailerController@load');
        Route::get('/approve/{id}', 'RetailerController@approve');
    });

    Route::prefix('visitors')->group(function() {
        Route::get('/', 'VisitorController@index');
        Route::post('load', 'VisitorController@load');
        Route::get('/approve/{id}', 'VisitorController@approveRequest');
    });

    Route::prefix('scans')->group(function(){
        Route::get('/', 'SsanQrCodeController@index');
        Route::post('scan_qr_code', 'SsanQrCodeController@scanQRCode');
    });
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';