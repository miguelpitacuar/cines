<?php

namespace App\Http\Controllers;

use App\Models\actores;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actor=actores::all();
        return view ('actores.index',compact('actor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actor=actores::all();
        return view ('actores.create',compact('actor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'biografia' => 'nullable|string',
        ]);
        
        // Crear una nueva categoría
        actores::create($request->all());
        
        // Redirigir a la vista de categorías con un mensaje de éxito
        return redirect('Actores')->with('success', 'actor agregada correctamente.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $actor = actores::findOrFail($id);
        return view('actores.edit', compact('actor'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'biografia' => 'nullable|string',
        'fecha_nacimiento' => 'nullable|date',
        
    ]);

    // Obtener todos los datos del formulario excepto el token y el método
    $datos_categorias = $request->except(['_token', '_method']);
    
    // Actualizar la categoría en la base de datos
    actores::where('id', $id)->update($datos_categorias);
    
    // Redirigir a la vista de índice con un mensaje de éxito
    return redirect('Actores')->with('success', 'La categoría se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       actores::destroy($id);
        return redirect('Actores')->with('success', 'actor  se elimino correctamente correctamente.');;
    }
}
