<form action="{{ url('/Actores') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('actores.formulario')
</form>