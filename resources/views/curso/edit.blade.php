@extends('layouts.plantilla')
@section('title', 'Editar')

@section('content')
<h1>Acá podrás editar un curso</h1>
<form action="{{route('curso.update', $prueba)}}" method="POST">

    @csrf

    @method('put')

    <br>
    <label>Nombre:
    <input type="text" name="name" value="{{$prueba->name}}">
    </label>
    <br>
    <label>Descripción:
    <textarea name="description" rows="5">{{$prueba->Description}}
    </textarea>
    </label>
    <br>
    <button type="submit">Actualizar Formulario</button>
</form>

@endsection