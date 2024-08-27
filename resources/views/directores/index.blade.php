@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">DIRECTORES </h5>
            <div class="card-body">
                <a href="{{url('Directores/create')}}"
                >agregar nuevo director </a> 
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
                        @foreach($director as $dir)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $dir->nombre }}</td>
                                <td>{{ $dir->biografia}}</td>
                                <td>{{ $dir->fecha_nacimiento}}</td>
                               
                               
                                <td> 
                                    <a href="{{ url('Directores/' . $dir->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>
                                    <form method="POST" action="{{ url('/Directores' . '/' . $dir->id) }}" accept-charset="UTF-8" style="display:inline">
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