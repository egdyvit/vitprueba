<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function salida()
    {
        return view('prueba.salida');
    }
}
