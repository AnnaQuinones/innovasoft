@extends('layouts.app')
@section('content')
<div class="container">
          
    <form action="{{ url('/favorito_categoria') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="categoria_id">Categoría:</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                <option value="">Seleccione categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombreCategoria }}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div class="form-group">
            <label for="favorito_id">Sitio Favorito:</label>
            <select name="favorito_id" id="favorito_id" class="form-control">
                <option value="">Seleccione el sitio favorito</option>
                @foreach ($favoritos as $favorito)
                <option value="{{ $favorito->id }}">{{ $favorito->titulo }}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div class="form-group">
            <input type="submit" value="Guardar" class="btn btn-success">
            <a href="{{ url('home') }}" class="btn btn-success">Regresar</a>
            <br>
        </div>
    </form>
</div>
@endsection