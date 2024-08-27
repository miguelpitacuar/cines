<form action="{{ url('/Generos') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('generos.formulario')
</form>