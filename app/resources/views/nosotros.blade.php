@extends("plantilla")


@section("seccion")
    <h1>nosotros ome nosotros</h1>
    @foreach($equipo as $item)
    <a href="{{ route( 'nos', $item) }}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach


    @if(!empty($nombre))
        @switch($nombre)

            @case($nombre == "jelipe")
                <h2>JELIPE</h2>
                <p>{{ $nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veniam reiciendis, fugit excepturi possimus corporis aspernatur id labore temporibus hic dolorum expedita corrupti ipsa doloribus animi facere officiis! Illum, optio!</p>
                @break

            @case($nombre == "johan")
                <h2>JOHAN</h2>
                <p>{{ $nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veniam reiciendis, fugit excepturi possimus corporis aspernatur id labore temporibus hic dolorum expedita corrupti ipsa doloribus animi facere officiis! Illum, optio!</p>
                @break

            @case($nombre == "jaimico")
                <h2>JAIMICO</h2>
                <p>{{ $nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum veniam reiciendis, fugit excepturi possimus corporis aspernatur id labore temporibus hic dolorum expedita corrupti ipsa doloribus animi facere officiis! Illum, optio!</p>
                @break

        @endswitch
    @endif
@endsection