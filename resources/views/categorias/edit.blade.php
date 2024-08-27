<form action="{{ url('/Categorias/'.$categoria->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('categorias.formulario')
</form>