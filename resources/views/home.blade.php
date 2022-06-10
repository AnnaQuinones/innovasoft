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
                        
                        <a href="{{ url('categoria/create') }}" class="btn btn-success">Crear una categoría</a>
                        <a href="{{ url('favorito/create') }}" class="btn btn-success">Crear una sitio favorito</a>
                        <a href="{{ url('favorito_categoria/create') }}" class="btn btn-success">Añadir categoría</a>
                        
                    </div>
                </div>
                <br>
                <div class="card-header">Favoritos publicos</div>
                    <div class="card-body">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>TituloFavorito</th>
                                    <th>URL</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $favoritos as $favorito)
                                <tr>
                                    <td>{{ $favorito->titulo}}</td>
                                    <td>{{ $favorito->URL}}</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" onClick="myFunction('{{ $favorito->titulo}}','{{ $favorito->descripcionF}}','{{ $favorito->URL}}')">Detalle</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle Favorito</h5>
        <button type="button" class="close" onClick="cerrarModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <label for="FirstField">Titulo:</label>
            <input type="text" id='tituloDetalle' disabled="disabled"><br>
            <label for="FirstField">Descripcion:</label>
            <input type="text" id='descripcionDetalle' disabled="disabled"><br>
            <label for="FirstField">URL:</label>
            <input type="text" id='urlDetalle' disabled="disabled"><br>
      </div>
    </div>
  </div>
</div>
@endsection

<script>
function myFunction(tituloDetalle, descripcionDetalle, urlDetalle) {
  $("#tituloDetalle").val(tituloDetalle);
  $("#descripcionDetalle").val(descripcionDetalle);
  $("#urlDetalle").val(urlDetalle);

  $('#exampleModal').modal('show')
}

function cerrarModal() {
    $('#exampleModal').modal('hide')
}
</script>
