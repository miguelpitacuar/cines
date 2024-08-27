<form action="{{ url('/Clacificaciones') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('clacificaciones.formulario')
</form>