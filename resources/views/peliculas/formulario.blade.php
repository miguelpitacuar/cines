@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Mostrar mensaje de éxito si está disponible -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Editar Película</h5>
        </div>
        <div class="card-body">
           
                
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" value="{{ isset($pelicula->titulo) ? $pelicula->titulo : '' }}" id="titulo">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="4">{{ isset($pelicula->descripcion) ? $pelicula->descripcion : '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="director_id" class="form-label">Director ID</label>
                    <input type="number" name="director_id" class="form-control" value="{{ isset($pelicula->director_id) ? $pelicula->director_id : '' }}" id="director_id">
                </div>

                <div class="mb-3">
                    <label for="anio" class="form-label">Año</label>
                    <input type="number" name="anio" class="form-control" value="{{ isset($pelicula->anio) ? $pelicula->anio : '' }}" id="anio">
                </div>

                <div class="mb-3">
                    <label for="genero_id" class="form-label">Género ID</label>
                    <input type="number" name="genero_id" class="form-control" value="{{ isset($pelicula->genero_id) ? $pelicula->genero_id : '' }}" id="genero_id">
                </div>

                <div class="mb-3">
                    <label for="duracion" class="form-label">Duración</label>
                    <input type="number" name="duracion" class="form-control" value="{{ isset($pelicula->duracion) ? $pelicula->duracion : '' }}" id="duracion">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ url('Peliculas') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
