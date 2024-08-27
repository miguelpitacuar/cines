<form action="{{ url('/Peliculas/'.$pelicula->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('peliculas.formulario')
</form>