@foreach($funcion as $fun)
<div>
    {{$fun->nombre}}:<br>
    {{$dir->pelicula_id}}:<br>
    {{$dir->sala_id}}:<br>
    {{$dir->fecha}}:<br>
    {{$dir->hora}}:<br>
    <hr>
</div>
@endforeach