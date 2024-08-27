<?php

namespace App\Http\Controllers;

use App\Models\generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genero=Generos::all();
        return view ('generos.index',compact('genero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genero=generos::all();
        return view ('generos.create',compact('genero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_generos=request()->except('_token');
        generos::insert($datos_generos);
        return response()->json($datos_generos);
    }

    /**
     * Display the specified resource.
     */
    public function show(generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genero = generos::findOrFail($id);
        return view('generos.edit', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos_generos=request()->except(['_token','_method']);
        generos::where('id','=',$id)->update($datos_generos);
        
        $genero = generos::findOrfail($id);
        return view('generos.edit',compact('genero'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        generos::destroy($id);
        return redirect('Generos');
    }
}
