@extends('layouts.app')
@section('content')

<h3 class="text-white" class="bg-info">πΏππ π‘π ππ π’π π’πππππ </h3>

<a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevo Usuario</a>

<table class="table text-white">
<th>#</th>
<th>Nombre</th>
<th>Cedula</th>

@foreach($users as $u)
<tr>

<td>{{$loop->iteration}} </td>
<td>{{$u->usu_name}} </td>
<td>{{$u->usu_cedula}} </td>


</tr>
@endforeach
</table>
@endsection

