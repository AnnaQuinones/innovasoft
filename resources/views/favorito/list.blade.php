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
    <label for="URL">URL:</label>
    <input type="text" name="URL" class="form-control" value="{{ isset($favorito->URL)?$favorito->URL:'' }}" id="URL">
    <br>
</div>
<div class="form-group">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" class="form-control" value="{{ isset($favorito->titulo)?$favorito->titulo:'' }}" id="titulo">
    <br>
</div>
<div class="form-group">
    <label for="descripcionF">Descripción:</label>
    <input type="text" name="descripcionF" class="form-control" value="{{ isset($favorito->descripcionF)?$favorito->descripcionF:'' }}" id="descripcionF">
    <br>
</div>
<div class="form-group">
    <label for="visibilidad">Visibilidad:</label>
    <select name="visibilidad" id="visibilidad" class="form-control">
        <option value="">Seleccione privacidad</option>
        <option value="1">Público</option>
        <option value="0">Privado</option>
    </select>
    <br>
</div>
<div class="form-group">
    <input type="submit" value="Guardar" class="btn btn-success">
    <a href="{{ url('favorito/') }}" class="btn btn-primary">Regresar</a>
    <br>
</div>

