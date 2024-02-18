<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');


// Route::get('mi/ruta', ControladorDeLaRuta);
// Route::post('mi/ruta', ControladorDeLaRuta)
// Route::put('mi/ruta', ControladorDeLaRuta)
// Route::delete('mi/ruta', ControladorDeLaRuta)
// Route::patch('mi/ruta', ControladorDeLaRuta)
