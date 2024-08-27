<label for="titulo">Título</label>
    <input type="text" name="titulo" value="{{ isset($pelicula->titulo) ? $pelicula->titulo : '' }}" id="titulo">
    <br>

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" rows="4" cols="50">{{ isset($pelicula->descripcion) ? $pelicula->descripcion : '' }}</textarea>
    <br>

    <label for="director_id">Director ID</label>
    <input type="number" name="director_id" value="{{ isset($pelicula->director_id) ? $pelicula->director_id : '' }}" id="director_id">
    <br>

    <label for="anio">Año</label>
    <input type="number" name="anio" value="{{ isset($pelicula->anio) ? $pelicula->anio : '' }}" id="anio">
    <br>

    <label for="genero_id">Género ID</label>
    <input type="number" name="genero_id" value="{{ isset($pelicula->genero_id) ? $pelicula->genero_id : '' }}" id="genero_id">
    <br>

    <label for="duracion">Duración</label>
    <input type="number" name="duracion" value="{{ isset($pelicula->duracion) ? $pelicula->duracion : '' }}" id="duracion">
    <br>

    <input type="submit" value="Guardar">
    <a href="{{ url('Peliculas') }}">Regresar</a>
    <br>
</form>