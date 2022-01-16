@extends('plantilla')

@section('seccion')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach()
  </tbody>
</table>

@endsection()