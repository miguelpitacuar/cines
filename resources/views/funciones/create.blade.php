<form action="{{ url('/Funciones') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('funciones.formulario')
</form>