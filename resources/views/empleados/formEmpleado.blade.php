@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
  <form method="POST" action="{{ URL::to('/postFormEmpleado') }}">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" /><br />
    <input type="text" name="apellido1" placeholder="Apellido 1" />
    <input type="text" name="apellido2" placeholder="Apellido 2" /><br />
    <input type="text" name="email" placeholder="Email" />
    <input type="text" name="telefono" placeholder="Telefono" /><br /><br />
    <span>Departamento:</span><br />
    <select name="departamento">
      @foreach($listaDepartamentos as $departamento)
        <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
      @endforeach
    </select><br /><br />
    <input type="submit" value="Enviar" />
  </form>
@endsection
