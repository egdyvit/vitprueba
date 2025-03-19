<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\pruebaController;
use App\Mail\contactanosMailable;

Route::get('/', homeController::class)->name('home');


Route::controller(cursoController::class)->group(function(){
    Route::get ('curso', 'index')->name('curso.index');

    Route::get('curso/create', 'create')->name('curso.create');
    
    Route::get ('curso/{prueba}', 'show')->name('curso.show');

    Route::post('curso', 'store')->name('curso.store');

    Route::get('curso/{prueba}/edit', 'edit')->name('curso.edit');

    Route::put('curso/{prueba}', 'update')->name('curso.update');

    Route::delete('curso/{prueba}', 'destroy')->name('curso.destroy');

    Route::view('nosotros', 'nosotros')->name('nosotros');

});

   // Route::resource('curso', cursoController::class);


Route::controller(pruebaController::class)->group(function(){
    Route::get ('salida', 'salida');

});


Route::get('contactanos', function() {
    Mail::to('ariasegdy@gmail.com')
    ->send(new contactanosMailable);

    return "mensaje enviado";
})->name('contactanos');