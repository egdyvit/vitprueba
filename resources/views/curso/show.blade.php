@extends('layouts.plantilla')
@section('title', 'Mostrar')

@section('content')
<h1>El curso es: {{$curl->name}}</h1>
<br>
<a href="{{route('curso.edit', $curl)}}">Editar Curso</a>
@endsection