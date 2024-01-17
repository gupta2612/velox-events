<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home');
Route::view('/about-us', 'about');
Route::view('/services', 'services');

Route::prefix('services')->group(function () {
    Route::view('/audio-visual-rental', 'audio-vr');
        Route::prefix('/audio-visual-rental')->group(function () {
            Route::view('/audio-sound-systems', 'audio-ss');
            Route::view('/lighting', 'lighting');
            Route::view('/truss-roof-systems', 'truss-r-s');
            Route::view('/led-screens', 'led-screens');
            Route::view('/staging', 'staging');
        });
    Route::view('/wedding-planning', 'wedding-planning');
    Route::view('/fabrication-backdrop-set-design', 'fabrication-bsd');
    Route::view('/photography-videography', 'photography-video');
    Route::view('/artist-management', 'artist-management');
    Route::view('/live-streaming-animation-graphic-designing', 'live-streaming-agd');
});

Route::view('/career', 'career');
Route::view('/contact-us', 'contact');
