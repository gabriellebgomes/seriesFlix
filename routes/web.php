<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('site.index');
});
Auth::routes();

Route::get('site.index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::middleware('auth')->group(function () {
    Route::resource('series', SeriesController::class);

});