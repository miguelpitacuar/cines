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
                <h5 class="mb-0">Editar Categoría</h5>
            </div>
            <div class="card-body">
                <!-- Fila para Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ isset($categoria->nombre) ? $categoria->nombre : '' }}" id="nombre" placeholder="Ingrese el nombre de la categoría">
                </div>

                <!-- Fila para Descripción -->
                <div class="mb-3">
                    <label for="describcion" class="form-label">Descripción</label>
                    <textarea name="describcion" id="describcion" class="form-control" rows="4" placeholder="Ingrese la descripción de la categoría">{{ isset($categoria->describcion) ? $categoria->describcion : '' }}</textarea>
                </div>

                <!-- Botones -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ url('Categorias') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection