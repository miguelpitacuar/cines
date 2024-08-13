@foreach($sala as $r)
<div>
    {{$r->nombre}}:<br>
    {{$r->capacidad}}:<br>
    <hr>
</div>
@endforeach