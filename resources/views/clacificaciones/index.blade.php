@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container">
        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">clacificaciones </h5>
            <div class="card-body">
                <a href="{{url('Clacificaciones/create')}}"
                >agregar nueva clacificacion</a> 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>describcion</th>
                            
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($clacificacion as $cla)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $cla->nombre }}</td>
                                <td>{{ $cla->descripcion}}</td>
                               
                                <td> 
                                    <a href="{{ url('Clacificaciones/' . $cla->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>


                                    <form method="POST" action="{{ url('/Clacificaciones' . '/' . $cla->id) }}" accept-charset="UTF-8" style="display:inline">
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