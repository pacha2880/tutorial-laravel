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

Route::get('/', function () {
    echo "<a href='". route('contactos') ."'>Contacto 1</a><br>";
    echo "<a href='". route('contactos') ."'>Contacto 2</a><br>";
    echo "<a href='". route('contactos') ."'>Contacto 3</a><br>";
    echo "<a href='". route('contactos') ."'>Contacto 4</a><br>";
});

ROute::get('contactame', function(){
    return "seccion de contactos";
})->name('contactos');

Route::get('caca/{nombre?}', function($nombre = "invitado") {
    return "hola " . $nombre . " este mundo es una caca";
});