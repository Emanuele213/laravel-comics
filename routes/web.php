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

Route::get('/characters', function () {
    $navbar = config('navbar');
    return view('guest.characters', [
        'navbar' => $navbar,
    ]);
})->name('characters');

Route::get('/', function () {
    $navbar = config('navbar');
    $comics = config('comics');
    return view('guest.comics', [
        'navbar'  =>  $navbar,
        'comics'  =>  $comics,
        //'comics' = config('comics'), si puo' fare anche cosi
    ]);
})->name('comics');

Route::get('/movies', function () {
    $navbar = config('navbar');
    return view('guest.movies', [
        'navbar' => $navbar,
    ]);
})->name('movies');
