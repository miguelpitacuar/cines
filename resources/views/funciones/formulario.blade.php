<label for="pelicula_id">Película</label>
<input type="text" name="pelicula_id" value="{{isset($funcion->pelicula_id)?$funcion->pelicula_id:''}}" id="pelicula_id">
<br>

<label for="sala_id">Sala</label>
<input type="text" name="sala_id" value="{{isset($funcion->sala_id)?$funcion->sala_id:''}}" id="sala_id">
<br>

<label for="fecha">Fecha</label>
<input type="date" name="fecha" value="{{isset($funcion->fecha)?$funcion->fecha:''}}" id="fecha">
<br>

<label for="hora">Hora</label>
<input type="time" name="hora" value="{{isset($funcion->hora)?$funcion->hora:''}}" id="hora">
<br>



    

    

    <input type="submit" value="Guardar">
    <a href="{{ url('Funciones') }}">Regresar</a>
    <br>
</form>