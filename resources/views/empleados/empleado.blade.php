@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado:</h2>
  <p>{{ $empleado->nombre }}</p>
  <h3>Responsable del proyecto:</h3>
  @if(isset($empleado->proyecto))
    <p><a href="/proyecto/{{ $empleado->proyecto->id }}">{{ $empleado->proyecto->nombre }}</a></p>
  @endif
  <h3>Colabora en los siguientes proyectos:</h3>
  @if(isset($empleado->proyectos))
    @foreach($empleado->proyectos as $proyecto)
      <p><a href="/proyecto/{{ $proyecto->id }}">{{ $proyecto->nombre }} </a><b>Fecha Inicio: </b>{{ date('d-m-y', strtotime($proyecto->pivot->fechainicio)) }} <b>Fecha Fin: </b>{{ date('d-m-y', strtotime($proyecto->pivot->fechafin)) }}</p>
    @endforeach
  @endif
  <br /><br />
  <a href="/formEmpleado">Añadir nuevo empleado</a>
@endsection
