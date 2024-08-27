@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header" style="color: #6933ff;">menu</h5>
        <div class="card-body">
            <!-- Menú de navegación -->
            <nav>
                <div class="list-group">
                    <a href="{{ route('Actores.index') }}" class="list-group-item list-group-item-action">
                    ACTORES
                    </a>
                    <a href="{{ route('Peliculas.index') }}" class="list-group-item list-group-item-action">
                     PELICULAS
                    </a>
                    <a href="{{ route('Categorias.index') }}" class="list-group-item list-group-item-action">
                    CATEGORIAS
                   </a>
                   <a href="{{ route('Clacificaciones.index') }}" class="list-group-item list-group-item-action">
                   Clacificaciones
                    </a>
                    <a href="{{ route('Directores.index') }}" class="list-group-item list-group-item-action">
                     DIRECTORES
                     </a>
                    <a href="{{ route('Funciones.index') }}" class="list-group-item list-group-item-action">
                    FUNCIONES
                    </a>
                    <a href="{{ route('Generos.index') }}" class="list-group-item list-group-item-action">
                     GENEROS
                    </a>
                    <a href="{{ route('Reservas.index') }}" class="list-group-item list-group-item-action">
                    RESERVAS
                    </a>
                    <a href="{{ route('Salas.index') }}" class="list-group-item list-group-item-action">
                    SALAS
                    </a>
                    
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
