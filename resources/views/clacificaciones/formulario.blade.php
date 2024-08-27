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

    <!-- Formulario de edición de categoría -->
    

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Editar Clasificación</h5>
            </div>
            <div class="card-body">
                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ isset($clacificacion->nombre) ? $clacificacion->nombre : '' }}" id="nombre" placeholder="Ingrese el nombre de la clasificación">
                </div>

                <!-- Campo Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Ingrese la descripción de la clasificación">{{ isset($clacificacion->descripcion) ? $clacificacion->descripcion : '' }}</textarea>
                </div>

                <!-- Botones -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ url('Clacificaciones') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
