<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\pruebaController;

Route::get('/', homeController::class);


Route::controller(cursoController::class)->group(function(){
    Route::get ('curso', 'index')->name('curso.index');

    Route::get('curso/create', 'create');
    
    Route::get ('curso/{prueba}', 'show')->name('curso.show');

    Route::post('curso', 'store')->name('curso.store');

    Route::get('curso/{prueba}/edit', 'edit')->name('curso.edit');

    Route::put('curso/{prueba}', 'update')->name('curso.update');

    Route::delete('curso/{prueba}', 'destroy')->name('curso.destroy');

});

Route::controller(pruebaController::class)->group(function(){
    Route::get ('salida', 'salida');

});


