<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){
        return view('curso.index');
    }

    public function create(){
        return view('curso.create');
    }

    public function show($cur){
            return view('curso.show', compact('cur'));
    }
}
