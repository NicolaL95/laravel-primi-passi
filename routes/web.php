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
    $welcome = 'Stai imparando:';
    $language = 'Lavarel';
    $ahref = [
        'About Lavarel','Why Lavarel','Lavarel features','Lavarel tips','Lavarel vs Core PHP'
    ];
     $atitle = [
        'about','why','features','tips','php'
    ];
    return view('home',compact('welcome','language','ahref','atitle'));
});

Route::get('/about', function () {
   $title = 'About Lavarel';
    return view('about',compact('title'));
});

Route::get('/why', function () {
   $title = 'Why Lavarel';
    return view('why',compact('title'));
});

Route::get('/features', function () {
   $title = 'Lavarel features';
    return view('features',compact('title'));
});

Route::get('/tips', function () {
   $title = 'Lavarel tips';
    return view('tips',compact('title'));
});

Route::get('/php', function () {
   $title = 'Lavarel vs Core PHP';
    return view('php',compact('title'));
});