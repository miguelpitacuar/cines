<?php

namespace App\Http\Controllers;

use App\Models\clacificaciones;
use Illuminate\Http\Request;

class ClacificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clacificacion=Clacificaciones::all();
        return view ('clacificaciones.index',compact('clacificacion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clacificacion=clacificaciones::all();
        return view ('clacificaciones.create',compact('clacificacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
    ]);

    // Crear una nueva categoría
    clacificaciones::create($request->all());

    // Redirigir a la vista de categorías con un mensaje de éxito
    return redirect('Clacificaciones')->with('success', 'clacificacion agregada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(clacificaciones $clacificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $clacificacion = clacificaciones::findOrFail($id);
        return view('clacificaciones.edit', compact('clacificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
    ]);

    // Obtener todos los datos del formulario excepto el token y el método
    $datos_categorias = $request->except(['_token', '_method']);
    
    // Actualizar la categoría en la base de datos
    clacificaciones::where('id', $id)->update($datos_categorias);
    
    // Redirigir a la vista de índice con un mensaje de éxito
    return redirect('Clacificaciones')->with('success', 'La Clacificacion se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        clacificaciones::destroy($id);
        return redirect('Clacificaciones')->with('success', 'La clacificacion se elimino correctamente correctamente.');;
    }
}
