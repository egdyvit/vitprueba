@extends('layouts.plantilla')
@section('title', 'Curso')

@section('content')
<h1>Bienvenido</h1>

<ul>
    @foreach ($users as $user)
        <li>
            <a href="{{route('curso.show', $user->id)}}">{{$user->name}}</a>
        </li>
    @endforeach
</ul>

{{$users->links()}}
@endsection