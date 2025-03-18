@extends('layouts.plantilla')
@section('title', 'Editar')

@section('content')
<h1>Acá podrás editar un curso</h1>
<form action="{{route('curso.update', $prueba)}}" method="POST">

    @csrf

    @method('put')

    <br>
    <label>Nombre:
    <input type="text" name="name" value="{{old('name', $prueba->name)}}">
    </label>
    <br>
    @error('name')
    <br>    
    <span>({{$message}})</span>
    <br>
    @enderror

    <br>
    <label>Descripción:
    <textarea name="Description" rows="5">{{old('Description', $prueba->Description)}}
    </textarea>
    </label>
    <br>
    @error('Description')
    <br>    
    <span>({{$message}})</span>
    <br>
    @enderror
    <br>
    <button type="submit">Actualizar Formulario</button>
</form>

@endsection