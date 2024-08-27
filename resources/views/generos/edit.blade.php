<form action="{{ url('/Generos/'.$genero->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('generos.formulario')
</form>