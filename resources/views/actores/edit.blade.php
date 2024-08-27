<form action="{{ url('/Actores/'.$actor->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('actores.formulario')
</form>