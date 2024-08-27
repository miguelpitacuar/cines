<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria=Categorias::all();
        return view ('categorias.index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria=categorias::all();
        return view ('categorias.create',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'describcion' => 'nullable|string',
    ]);

    // Crear una nueva categoría
    categorias::create($request->all());

    // Redirigir a la vista de categorías con un mensaje de éxito
    return redirect('Categorias')->with('success', 'Categoría agregada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categoria = categorias::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'describcion' => 'nullable|string',
    ]);

    // Obtener todos los datos del formulario excepto el token y el método
    $datos_categorias = $request->except(['_token', '_method']);
    
    // Actualizar la categoría en la base de datos
    categorias::where('id', $id)->update($datos_categorias);
    
    // Redirigir a la vista de índice con un mensaje de éxito
    return redirect('Categorias')->with('success', 'La categoría se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        categorias::destroy($id);
        return redirect('Categorias')->with('success', 'La categoría se elimino correctamente correctamente.');
    }
}
