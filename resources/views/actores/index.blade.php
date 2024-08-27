@extends('layouts.app')

@section('content')

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">Actores </h5>
            <div class="card-body">
                <a href="{{url('Actores/create')}}"
                >agregar nueva actor</a> 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>biografia</th>
                            <th>fecha_nacimiento</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($actor as $au)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $au->nombre }}</td>
                                <td>{{ $au->biografia }}</td>
                                <td>{{ $au->fecha_nacimiento }}</td>
                                <td> 
                                    <a href="{{ url('Actores/' . $au->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>


                                    <form method="POST" action="{{ url('/Actores' . '/' . $au->id) }}" accept-charset="UTF-8" style="display:inline">
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