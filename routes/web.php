<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RssFeedController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

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


Route::get(/**
 * @return Application|Factory|\Illuminate\Contracts\View\View
 */ '/downloads', function () {
    return view('eutranet.downloads');
})->name('downloads');

/**
 * ---------------------------------------------------------------------------
 * INSDUSTRIES....
 * ---------------------------------------------------------------------------
 */
Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('hr-and-communication', function () {
        return view('eutranet.industries.people.hr-and-communication');
    })->middleware(['web'])->name('hr-and-communication');

    Route::get('mapping', function () {
        return view('eutranet.industries.mapping.mapping');
    })->name('mapping');

    Route::get('maritime', function () {
        return view('eutranet.industries.maritime.maritime');
    })->name('maritime');

    Route::get('scanning', function () {
        return view('eutranet.industries.scanning.qrcodes');
    })->name('scanning');
});
/**
 * ---------------------------------------------------
 * PACKAGES
 * ---------------------------------------------------
 */
Route::get('/packages/laravel-init', function () {
    return view('eutranet.packages.laravel-init');
})->name('laravel-init');

Route::get('/packages/laravel-theme', function () {
    return view('eutranet.packages.laravel-theme');
})->name('laravel-theme');

Route::get('/packages/laravel-florbela-commons', function () {
    return view('eutranet.packages.laravel-florbela-commons');
})->name('laravel-florbela-commons');

Route::get('/packages/laravel-setup', function () {
    return view('eutranet.packages.laravel-setup');
})->name('laravel-setup');

Route::get('/packages/laravel-be', function () {
    return view('eutranet.packages.laravel-be');
})->name('laravel-be');

Route::get('/packages/laravel-frontend', function () {
    return view('eutranet.packages.laravel-frontend');
})->name('laravel-frontend');

Route::get('/packages/laravel-my-space', function () {
    return view('eutranet.packages.laravel-my-space');
})->name('laravel-my-space');

/**
 * ---------------------------------------------------
 * DASHBOARD
 * ---------------------------------------------------
 */
Route::get(/**
 * @return Application|RedirectResponse|Redirector
 */ '/dashboard', function () {
    return redirect('/my-space/dashboard');
})->middleware(['web', 'auth'])->name('dashboard');
