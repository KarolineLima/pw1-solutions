@extends('layout')

@section('title', 'Usuarios')

@section('content')
    <h1>Usuários</h1>
    <ul>
    @foreach($usuarios as $usuario)
    <li>{{$usuario->nome}}</li>
    @endforeach
    </ul>
@endsection
