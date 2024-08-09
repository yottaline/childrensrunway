<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
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
});

require __DIR__ . '/auth.php';
