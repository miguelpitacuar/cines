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
            <h5 class="mb-0">Editar Actor</h5>
        </div>
        <div class="card-body">
            

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ isset($actor->nombre) ? $actor->nombre : '' }}" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" value="{{ isset($actor->fecha_nacimiento) ? $actor->fecha_nacimiento : '' }}" id="fecha_nacimiento">
                </div>

                <div class="mb-3">
                    <label for="biografia" class="form-label">Biografía</label>
                    <textarea name="biografia" id="biografia" class="form-control" rows="4">{{ isset($actor->biografia) ? $actor->biografia : '' }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ url('Actores') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
