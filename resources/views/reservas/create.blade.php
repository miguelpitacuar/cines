<form action="{{ url('/Reservas') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('reservas.formulario')
</form>