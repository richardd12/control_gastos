@extends('layouts.app')
@section('content')
<h1 class=""> Vista para el formulario Usuarios</h1>
<form action="{{route('usuario.store')}}" method="POST">
@csrf
<label for="">Nombre:</label>
<input type="text" name="usu_name">
<label for="">Cedula:</label>
<input type="text" name="usu_cedula">
<label for="">Email:</label>
<input type="text" name="email">
<label for="">Password:</label>
<input type="password" name="password">

<button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection	