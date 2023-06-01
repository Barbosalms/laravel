@extends('layouts.base')

@section('content')

    <h1>{{$usuario->name}}</h1>
    <h2>
        <a class="btn btn-dark" href="{{ route('usuario.index')}}">
            <- Voltar
        </a>
    </h2>
    <p>
        <a href="malito::{{$usuario->email}}"{{$usuario->email}}></a>
    </p>


@endsection
