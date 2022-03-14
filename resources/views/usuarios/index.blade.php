@extends('layouts.app')
@section('content')

<h3 class="text-white" class="bg-info">𝐿𝑖𝑠𝑡𝑎 𝑑𝑒 𝑢𝑠𝑢𝑎𝑟𝑖𝑜𝑠</h3>

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

