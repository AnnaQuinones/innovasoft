@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url('categoria/create') }}" class="btn btn-success">Crear una categoría</a>
                        <a href="{{ url('favorito/create') }}" class="btn btn-success">Crear una sitio favorito</a>
                        <a href="{{ url('favorito_categoria/create') }}" class="btn btn-secondary">Añadir categoría</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
