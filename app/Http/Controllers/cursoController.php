<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\curso;
use App\Models\prueba;
use App\Models\User;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){

        $users = prueba::paginate();
        return view('curso.index', compact('users'));
    }

    public function create(){
        return view('curso.create');
    }

    public function store(StoreCurso $request){

        $curso = prueba::create($request->all());

        return redirect()->route('curso.show', $curso);

    }

    public function show($cur){
            $curl = prueba::find($cur);
            return view('curso.show', compact('curl'));
    }

    public function edit(prueba $prueba){
           return view('curso.edit', compact('prueba'));
    }

    public function update(StoreCurso $request, prueba $prueba){

        $prueba->update($request->all());
        return redirect()->route('curso.show', $prueba);
    }
}
