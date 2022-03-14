@extends('layouts.app')
@section('content')
<h1 class=""> Vista para el formulario </h1>
<form action="{{route('categoria.store')}}" method="POST">
@csrf
<label for="">Detalle De la Categoria</label>
<input type="text" name="cat_detalle">

<button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection	