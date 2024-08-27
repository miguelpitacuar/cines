<form action="{{ url('/Directores') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('directores.formulario')
</form>