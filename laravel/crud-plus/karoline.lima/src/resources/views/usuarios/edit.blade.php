@extends('layout')

@section('title', 'Edit Usuario')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Usuario
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li></li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="post" action="{{ route('usuarios.update', $usuario) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" />
      </div>
      
      <button type="submit" class="btn btn-primary">Update Usuario</button>
    </form>
  </div>
</div>
@endsection