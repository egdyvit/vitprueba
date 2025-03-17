<?php

namespace App\Http\Controllers;

use App\Models\curso;
use App\Models\User;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){

        $users = User::paginate();
        return view('curso.index', compact('users'));
    }

    public function create(){
        return view('curso.create');
    }

    public function show($cur){
            return view('curso.show', compact('cur'));
    }
}
