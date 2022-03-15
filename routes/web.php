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

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About
Route::get('/chi-siamo', function () {

    return view('blog.about');
})->name('about');

// Articoli
Route::get('/articoli', function () {

    return view('blog.articles');
})->name('articles');

// Prodotti
Route::get('/prodotti', function () {

    return view('blog.products');
})->name('products');

// NAV
Route::get('/nav', function () {

    $data = [
        'pages' => [
            'Home' => 'home',
            'About' => 'about',
            'Products' => 'products',
            'Articles' => 'articles',
        ],
    ];

    return view('blog/nav', $data);
});
