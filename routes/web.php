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

/*NAV*/ 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});