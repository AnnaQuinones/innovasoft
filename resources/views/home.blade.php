@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menú') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-6">
                            <a href="{{ url('categoria/create') }}" class="btn btn-success btn-lg">Crear una categoría</a>
                            <br>
                            <br>
                            <a href="{{ url('favorito/create') }}" class="btn btn-success btn-lg">Crear una sitio favorito</a>
                            <br>
                            <br>
                            <a href="{{ url('favorito_categoria/create') }}" class="btn btn-secondary btn-lg">Añadir categoría</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
