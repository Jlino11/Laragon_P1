@extends('plantilla')

@section('seccion')

<h1>Este es mi Equipo: </h1>

@foreach($equipo as $item)
 <a href="{{ route('nosotros',$item) }}" class="h4 text-danger">{{$item}}</a><br>
@endforeach()

@if(!empty($nombre))

  @switch($item)

    @case($item == 'Lino')

      <h2>El nombre es {{ $nombre }}:</h2>
      <p class="mt-5">{{ $nombre }} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi autem magni cum alias quo tempore distinctio ipsa id, adipisci quae fugit reprehenderit minus laborum, sed harum, culpa laboriosam totam laudantium.</p>

    @break

    @case($item == 'Moreno')

      <h2>El nombre es {{ $nombre }}:</h2>
      <p class="mt-5">{{ $nombre }} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi autem magni cum alias quo tempore distinctio ipsa id, adipisci quae fugit reprehenderit minus laborum, sed harum, culpa laboriosam totam laudantium.</p>

    @break

    @case($item == 'Axel')

      <h2>El nombre es {{ $nombre }}:</h2>
      <p class="mt-5">{{ $nombre }} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi autem magni cum alias quo tempore distinctio ipsa id, adipisci quae fugit reprehenderit minus laborum, sed harum, culpa laboriosam totam laudantium.</p>

    @break

    @endswitch

@endif

@endsection()
