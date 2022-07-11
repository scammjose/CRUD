@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{url('empleado/create')}}">Añadir empleado</a>

<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apelido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td></td>
            <td>{{ $empleado->id }}</td>
            <td><img src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt=""></td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido_paterno }}</td>
            <td>{{ $empleado->Apellido_materno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                Editar 
                </a>
                | 
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar este registro?')" value="Borrar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection