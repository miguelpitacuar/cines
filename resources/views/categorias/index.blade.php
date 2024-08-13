@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">{{-- esto saque de la documentacion de boostrap --}}
            <h5 class="card-header">CATEGORIAS </h5>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>describcion</th>
                            <th>acciones</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($categoria as $cat)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- se puede poner loop para en la tabla balla uno por uni sumando pero 
                                si pone $cat ->id va a apareser el id de la base de datos se ve feo asi --}}
                                <td>{{ $cat->nombre }}</td>
                                <td>{{ $cat->describcion }}</td>
                                <td> 
                                    <a href="{{ url('categorias/' . $cat->id . '/edit') }}" >
                                        <button class="btn btn-warning">
                                            <i class="fas fa-pencil-alt">
                                            </i>EDITAR
                                        </button>
                                    </a>


                                    <a  href="{{ url('categorias/' . $cat->id . '/destroy') }}"
                                        class="btn btn-danger">ELIMINAR</button><i class="https://www.flaticon.com/free-icon/edit_1159633"></i>
                                    </a>    

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
@endsection