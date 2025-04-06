<?php

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

Route::view('/', 'index', ['title' => 'Home'])->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Gallery']);
})->name('gallery');

Route::get('/faculty-staff', function () {
    return view('faculty-staff', ['title' => 'Faculty & Staff']);
})->name('faculty-staff');

Route::get('/officers', function () {
    return view('officers', ['title' => 'Officers']);
})->name('officers');

Route::get('/services', function () {
    return view('services', ['title' => 'Services']);
})->name('services');

Route::get('/news', function () {
    return view('news', ['title' => 'News']);
})->name('news');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');
