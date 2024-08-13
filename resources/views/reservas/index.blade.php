@foreach($reserva as $re)
<div>
    {{$re->funcion_id}}:<br>
    {{$re->cliente_id}}:<br>
    {{$re->asientos}}:<br>
    
    <hr>
</div>
@endforeach