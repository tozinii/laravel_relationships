@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto:</h2>
  <p>{{ $proyecto->id }}</p>
  <h3>Titulo:</h3>
  <p>{{ $proyecto->id }}</p>
  <h3>Responsable:</h3>
  <p><a href="/empleado/{{ $proyecto->empleado->id }}">{{ $proyecto->empleado->nombre }}</a></p>
  <h3>Colaboradores:</h3>
  @foreach($proyecto->empleados as $empleado)
    <p><a href="/empleado/{{ $empleado->id }}">{{ $empleado->nombre }}</a></p>
  @endforeach

@endsection
