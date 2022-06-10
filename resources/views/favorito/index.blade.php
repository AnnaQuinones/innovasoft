@extends('layouts.app')
@section('content')

<div class="container">
    @if(Session::has('msn'))
        {{ Session::get('msn') }}
    @endif

    <a href="{{ url('favorito/create') }}" class="btn btn-success">Crear una sitio</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Título</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $favoritos as $favorito)
            <tr>
                <td>{{ $favorito->titulo}}</td>
                <td>{{ $favorito->URL}}</td>
                <td>
                    <a href="{{ url('/favorito/'.$favorito->id.'/edit') }}" class="btn btn-warning">
                        Editar
                    </a>    
                    |                    
                    <form action="{{ url('/favorito/'.$favorito->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar esta sitio?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $favoritos->links() }}
    <a href="{{ url('home') }}" class="btn btn-success">Home</a>    
</div>
@endsection