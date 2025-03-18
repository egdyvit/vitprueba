@extends('layouts.plantilla')
@section('title', 'Crear')

@section('content')
<h1>Acá podrás crear un curso</h1>
<form action="{{route('curso.store')}}" method="POST">

    @csrf

    <br>
    <label>Nombre:
    <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
    <br>    
    <span>({{$message}})</span>
    <br>
    @enderror

    <br>
    <label>Descripción:
    <textarea name="Description" rows="5">{{old('Description')}}</textarea>
    </label>
    <br>

    @error('Description')
    <br>    
    <span>({{$message}})</span>
    <br>
    @enderror

    <button type="submit">Enviar Formulario</button>
</form>

@endsection