@foreach($actor as $au)
<div>
    {{$au->nombre}}:<br>
    {{$au->biografia}}:<br>
    {{$au->fecha_nacimiento}}:<br>
    <hr>
</div>
@endforeach
