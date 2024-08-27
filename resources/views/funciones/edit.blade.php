<form action="{{ url('/Funciones/'.$funcion->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('funciones.formulario')
</form>