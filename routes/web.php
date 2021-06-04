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
    return view('dashboard');
});

Route::get('/about', function () {
    return view('page.about');
})->name('page.about');

Route::get('/property-grid', function () {
    return view('page.property1');
})->name('page.property1');

Route::get('/blog-grid', function () {
    return view('page.blog1');
})->name('page.blog1');

Route::get('/contact', function () {
    return view('page.contact-page');
})->name('page.contact-page');

Route::get('/property-single', function () {
    return view('page.property2');
})->name('page.property2');

Route::get('/blog-single', function () {
    return view('page.blogs2');
})->name('page.blogs2');

Route::get('/agents-grid', function () {
    return view('page.agents1');
})->name('page.agents1');

Route::get('/agents-single', function () {
    return view('page.agents2');
})->name('page.agents2');