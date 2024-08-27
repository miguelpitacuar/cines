<form action="{{ url('/Directores/'.$director->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('directores.formulario')
</form>