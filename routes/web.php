<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/health-care', 'healthcare')->name('health-care');
    Route::get('/tourism', 'tourism')->name('tourism');
    Route::get('/project-management', 'projectmanagement')->name('project-management');
    Route::get('/construction', 'construction')->name('construction');
    Route::get('/utilities', 'utilities')->name('utilities');
    Route::get('/tourism', 'tourism')->name('tourism');
    Route::get('/asset', 'assets')->name('asset');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/sign-in', 'signin')->name('sign-in');
});
