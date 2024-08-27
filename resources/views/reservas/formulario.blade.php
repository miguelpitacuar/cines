<label for="funcion_id">Función ID</label>
    <input type="number" name="funcion_id" value="{{ isset($reserva->funcion_id) ? $reserva->funcion_id : '' }}" id="funcion_id">
    <br>

    <label for="cliente_id">Cliente ID</label>
    <input type="number" name="cliente_id" value="{{ isset($reserva->cliente_id) ? $reserva->cliente_id : '' }}" id="cliente_id">
    <br>

    <label for="asientos">Asientos</label>
    <input type="number" name="asientos" value="{{ isset($reserva->asientos) ? $reserva->asientos : '' }}" id="asientos">
    <br>

    <input type="submit" value="Guardar">
    <a href="{{ url('Reservas') }}">Regresar</a>
    <br>
</form>