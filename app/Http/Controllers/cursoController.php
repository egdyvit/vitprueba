<?php

namespace App\Http\Controllers;

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

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'

        ]);

        $curso = new prueba();
        $curso->name = $request->name;
        $curso->Description = $request->description;
        $curso->save();

        return redirect()->route('curso.show', $curso);

    }

    public function show($cur){
            $curl = prueba::find($cur);
            return view('curso.show', compact('curl'));
    }

    public function edit(prueba $prueba){
           return view('curso.edit', compact('prueba'));
    }

    public function update(Request $request, prueba $prueba){
        $prueba->name = $request->name;
        $prueba->Description = $request->description;
        $prueba->save();

        return redirect()->route('curso.show', $prueba);
    }
}
