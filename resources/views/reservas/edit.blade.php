<form action="{{ url('/Reservas/'.$reserva->id) }}" method="post">
    @csrf
    {{method_field('PATCH ')}}
    @include('reservas.formulario')
</form>