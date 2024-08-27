@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">RESERVAS </h5>
            <div class="card-body">
                <a href="{{url('Reservas/create')}}"
                >agregar reservas</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>funcion_id</th>
                            <th>cliente_id</th>
                            <th>asientos</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($reserva as $re)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $re->funcion_id }}</td>
                                <td>{{ $re->cliente_id}}</td>
                                <td>{{ $re->asientos}}</td>
                                
                                <td> 
                                    <a href="{{ url('Reservas/' . $re->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>
                                    <form method="POST" action="{{ url('/Reservas' . '/' . $re->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Gasto" onclick="return confirm(&quot;Confirm Eliminar?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar </button>
                                    </form>  


                                      

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
@endsection