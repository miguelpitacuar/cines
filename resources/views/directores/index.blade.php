@foreach($director as $dir)
<div>
    {{$dir->nombre}}:<br>
    {{$dir->biografia}}:<br>
    {{$dir->fecha_nacimiento}}:<br>
    <hr>
</div>
@endforeach