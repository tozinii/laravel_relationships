@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>

    @foreach($empleados as $empleado)
      <tr>
        <td>{{ $empleado->id }}</td>
        <td>{{ $empleado->nombre . '/' . $empleado->apellido1 }}</td>
        <td><a href="/departamento/{{ $empleado->departamento->id }}">{{ $empleado->departamento->nombre }}</a></td>
        @if(isset($empleado->proyecto))
          <td><a href="/empleado/{{ $empleado->proyecto->id }}">{{ $empleado->proyecto->nombre }}</a></td>
        @endif
      </tr>
    @endforeach
  </table>
  <br /><br />
  <a href="/formEmpleado">Añadir nuevo empleado</a>

@endsection
