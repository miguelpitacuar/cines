<form action="{{ url('/Categorias') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('categorias.formulario')
</form>