<label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ isset($sala->nombre) ? $sala->nombre : '' }}" id="nombre">
    <br>

    <label for="capacidad">Capacidad</label>
    <input type="number" name="capacidad" value="{{ isset($sala->capacidad) ? $sala->capacidad : '' }}" id="capacidad">
    <br>

    <input type="submit" value="Guardar">
    <a href="{{ url('Salas') }}">Regresar</a>
    <br>
</form>