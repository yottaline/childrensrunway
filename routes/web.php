<?php

use Illuminate\Support\Facades\Route;

// Dashboard Routes
Route::domain('dashboard.' . env('APP_URL'))->group(function () {
    Route::get('/', function () {
        return view('dashboard/home');
    })->name('dashboard');

    Route::prefix('retailers')->group(function () {
        Route::get('/', 'RetailerController@index');
        Route::post('load', 'RetailerController@load');
        Route::get('/approve/{id}', 'RetailerController@approve');
    });

    Route::prefix('visitors')->group(function () {
        Route::get('/', 'VisitorController@index');
        Route::post('load', 'VisitorController@load');
        Route::get('/approve/{id}', 'VisitorController@approveRequest');
    });

    Route::prefix('scans')->group(function () {
        Route::get('/', 'SsanQrCodeController@index');
        Route::post('scan_qr_code', 'SsanQrCodeController@scanQRCode');
    });
})->middleware(['auth']);

// Website Routes
Route::get('/', function () {
    return view('website/pages/home');
});

Route::get('/about', function () {
    return view('website/pages/about');
});

require __DIR__ . '/auth.php';
