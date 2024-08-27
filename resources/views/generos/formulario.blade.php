<label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ isset($genero->nombre) ? $genero->nombre : '' }}" id="nombre">
    <br>

    <!-- Campo Descripción -->
    <label for="descripcion">descripcion</label>
    <textarea name="descripcion" id="descripcion" rows="4" cols="50">{{ isset($genero->descripcion) ? $genero->descripcion : '' }}</textarea>
    <br>

    <!-- Botones -->
    <input type="submit" value="Guardar">
    <a href="{{ url('Generos') }}">Regresar</a>
    <br>
</form>