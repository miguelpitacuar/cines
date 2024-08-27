<?php

namespace App\Http\Controllers;

use App\Models\funciones;
use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcion=Funciones::all();
        return view ('funciones.index',compact('funcion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $funcion=funciones::all();
        return view ('funciones.create',compact('funcion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_funciones=request()->except('_token');
        funciones::insert($datos_funciones);
        return response()->json($datos_funciones);
    }

    /**
     * Display the specified resource.
     */
    public function show(funciones $funciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $funcion = funciones::findOrFail($id);
        return view('funciones.edit', compact('funcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos_funciones=request()->except(['_token','_method']);
        funciones::where('id','=',$id)->update($datos_funciones);
        
        $funcion = funciones::findOrfail($id);
        return view('funciones.edit',compact('funcion'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        funciones::destroy($id);
        return redirect('Funciones');
    }
}
