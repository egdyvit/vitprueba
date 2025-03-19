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

        $curso = new prueba();
        $curso->name = $request->name;
        $curso->Description = $request->description;
        $curso->save();

        return redirect()->route('curso.show', $curso);

    }

    public function show($prueba){
            $curso = prueba::find($prueba);
            return view('curso.show', compact('curso'));
    }

    public function edit(prueba $prueba){
           return view('curso.edit', compact('prueba'));
    }

    public function update(StoreCurso $request, prueba $prueba){

        $prueba->name = $request->name;
        $prueba->Description = $request->description;
        $prueba->save();

        return redirect()->route('curso.show', $prueba);
    }

    public function destroy (prueba $prueba){
        $prueba->delete();
        return redirect()->route('curso.index');
    }
}
