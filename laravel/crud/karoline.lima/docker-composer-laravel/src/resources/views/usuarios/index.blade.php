@extends('layout')

@section('title', 'Usuarios')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
    <tr>
      <td>{{$usuario->id}}</td>
      <td>{{$usuario->name}}</td>
      <td>{{$usuario->email}}</td>
      <td><a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('usuarios.destroy', $usuario->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('usuarios.create') }}" class="btn btn-primary" role="button">Add usuario</a>
@endsection