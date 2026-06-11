<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('site.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/series/create', [SeriesController::class, 'create'])
        ->name('series.create');

    Route::post('/series', [SeriesController::class, 'store'])
        ->name('series.store');

});