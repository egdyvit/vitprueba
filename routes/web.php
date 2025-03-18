<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\pruebaController;

Route::get('/', homeController::class);


Route::controller(cursoController::class)->group(function(){
    Route::get ('curso', 'index');

    Route::get('curso/create', 'create');
    
    Route::get ('curso/{cur}', 'show')->name('curso.show');

    Route::post('curso', 'store')->name('curso.store');

    Route::get('curso/{prueba}/edit', 'edit')->name('curso.edit');

    Route::put('curso/{prueba}', 'update')->name('curso.update');

});

Route::controller(pruebaController::class)->group(function(){
    Route::get ('salida', 'salida');

});


