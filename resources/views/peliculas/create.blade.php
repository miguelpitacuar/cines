<form action="{{ url('/Peliculas') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('peliculas.formulario')
</form>