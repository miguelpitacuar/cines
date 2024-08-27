<label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{isset($director->nombre)?$director->nombre:''}}"
    id="nombre">
    <br>

    <label for="biografia">Biografía</label>
    <textarea name="biografia" id="biografia" rows="4" cols="50">{{isset( $director->biografia) ? $director->biografia :'' }}</textarea>
    <br>

    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" value="{{isset($director->fecha_nacimiento)?$director->fecha_nacimiento:''}}" id="fecha_nacimiento">
    <br>

    

    

    <input type="submit" value="Guardar">
    <a href="{{ url('Directores') }}">Regresar</a>
    <br>
</form>