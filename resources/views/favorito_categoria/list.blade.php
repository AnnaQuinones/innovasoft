<!--Mostrar errores -->
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="nombreCategoria">Nombre categoría:</label>
    <input type="text" name="nombreCategoria" class="form-control" value="{{ isset($categoria->nombreCategoria)?$categoria->nombreCategoria:'' }}" id="nombreCategoria">
    <br>
</div>
<div class="form-group">
    <input type="submit" value="Guardar" class="btn btn-success">
    <a href="{{ url('categoria/') }}" class="btn btn-primary">Regresar</a>
    <br>
</div>