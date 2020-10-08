<?php

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
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('potfolio');
Route::view('/contact', 'contact')->name('contact');


//esto utilizar cuando se muestran cositas como politicas de privacidad, terminos y condiciones, algo sin parametros
//Route::view('/', 'home');
//Route::view('/', 'home', ['nombre' => 'jorge el cagon']);


// Route::get('/', function () {
//     $nombre = "jorge el goloso";
//     //return view('home')->with('nombre', $nombre);
//     //return view('home')->with(['nombre' => $nombre]);
//     //return view('home', ['nombre' => $nombre]);
//     return view('home', compact('nombre'));
// })->name('home');