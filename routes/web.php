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
    $links = [
        'home' => 'home',
        'about' => 'about',
        'shop' => 'shop',
        'news' => 'news'
    ];

    $name = 'Andrea';

    $surname = 'Abbonizio';

    return view('home', compact('links', 'name', 'surname'));
});

Route::get('/about', function () {
    $links = [
        'home' => 'home',
        'about' => 'about',
        'shop' => 'shop',
        'news' => 'news'
    ];
    return view('about', compact('links'));
})->name('about');

Route::get('/home', function () {
    $links = [
        'home' => 'home',
        'about' => 'about',
        'shop' => 'shop',
        'news' => 'news'
    ];

    $name = 'Andrea';

    $surname = 'Abbonizio';

    return view('home', compact('links', 'name', 'surname'));
})->name('home');


Route::get('/shop', function () {
    $links = [
        'home' => 'home',
        'about' => 'about',
        'shop' => 'shop',
        'news' => 'news'
    ];
    return view('shop', $links);
})->name('shop');


Route::get('/news', function () {
    $links = [
        'home' => 'home',
        'about' => 'about',
        'shop' => 'shop',
        'news' => 'news'
    ];
    return view('news', $links);
})->name('news');
