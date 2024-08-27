@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">Funciones  </h5>
            <div class="card-body">
                <a href="{{url('Funciones/create')}}"
                >agregar nueva funcion </a> 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>pelicula_id</th>
                            <th>sala_id</th>
                            <th>fecha</th>
                            <th>hora</th>
                            
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($funcion as $fun)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $fun->nombre }}</td>
                                <td>{{ $fun->pelicula_id}}</td>
                                <td>{{ $fun->sala_id}}</td>
                                <td>{{ $fun->fecha}}</td>
                                <td>{{ $fun->hora}}</td>
                                
                               
                               
                                <td> 
                                    <a href="{{ url('Funciones/' . $fun->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>


                                    <form method="POST" action="{{ url('/Funciones' . '/' . $fun->id) }}" accept-charset="UTF-8" style="display:inline">
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