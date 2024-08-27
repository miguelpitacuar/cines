<form action="{{ url('/Salas') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('salas.formulario')
</form>