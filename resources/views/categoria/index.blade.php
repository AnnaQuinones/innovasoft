@extends('layouts.app')
@section('content')

<div class="container">
    @if(Session::has('msn'))
        {{ Session::get('msn') }}
    @endif

    

    <a href="{{ url('categoria/create') }}" class="btn btn-success">Crear una categoría</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombreCategoria}}</td>
                <td>
                    <a href="{{ url('/categoria/'.$categoria->id.'/edit') }}" class="btn btn-warning">
                        Editar
                    </a>    
                    |                    
                    <form action="{{ url('/categoria/'.$categoria->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar esta categoría?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('home') }}" class="btn btn-success">Home</a>
</div>
@endsection