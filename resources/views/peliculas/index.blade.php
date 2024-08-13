@foreach($pelicula as $pe)
<div>
    {{$pe->titulo}}:<br>
    {{$pe->descripcion}}:<br>
    {{$pe->director_id}}:<br>
    {{$pe->anio}}:<br>
    {{$pe->genero_id}}:<br>
    {{$pe->duracion}}:<br>
    <hr>
</div>
@endforeach