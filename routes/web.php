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
    $language = 'Laravel';

     $ahref = [
       "about"=> 'About Laravel',
       "why" => 'Why Laravel',
       "features" => 'Laravel features',
     "tips" => 'Laravel tips',
       "php" => 'Laravel vs Core PHP'
    ];
    return view('home',compact('welcome','language','ahref'));
});

Route::get('/about', function () {
   $title = 'About Laravel';
    return view('about',compact('title'));
});

Route::get('/why', function () {
   $title = 'Why Laravel';
    return view('why',compact('title'));
});

Route::get('/features', function () {
   $title = 'Laravel features';
    return view('features',compact('title'));
});

Route::get('/tips', function () {
   $title = 'Laravel tips';
    return view('tips',compact('title'));
});

Route::get('/php', function () {
   $title = 'Laravel vs Core PHP';
    return view('php',compact('title'));
});