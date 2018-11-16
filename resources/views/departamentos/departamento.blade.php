@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: </h2>
  <p>{{ $departamento->nombre }}</p>
  <h3>Codigo: </h3>
  <p>{{ $departamento->codigo }}</p>
  <h3>Empleados:</h3>
  @foreach($departamento->empleados as $empleado)
  <p><a href="/empleado/{{ $empleado->id }}">{{ $empleado->nombre }}</p>
  @endforeach
@endsection
