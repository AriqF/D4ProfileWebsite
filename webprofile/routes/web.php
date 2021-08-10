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

Route::get('/', function () {
    return view('index');
});
Route::get('/vision-mission', function () {
    return view('vision-mission');
});
Route::get('/organization', function () {
    return view('organization');
});
Route::get('/accreditation', function () {
    return view('accreditation');
});
Route::get('/social-activities', function () {
    return view('social-activities');
});
Route::get('/achievements', function () {
    return view('achievements');
});
Route::get('/facility', function () {
    return view('facility');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
