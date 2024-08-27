<form action="{{ url('/Salas/'.$sala->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('salas.formulario')
</form>