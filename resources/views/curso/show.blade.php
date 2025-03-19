@extends('layouts.plantilla')
@section('title', 'Mostrar')

@section('content')
<h1>El curso es: {{$curso->name}}</h1>
<br>
<a href="{{route('curso.edit', $curso)}}">Editar Curso</a>

<form action="{{route('curso.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Borrar Curso</button>
</form>

@endsection