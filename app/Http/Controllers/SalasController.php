<?php

namespace App\Http\Controllers;

use App\Models\salas;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sala=salas::all();
        return view ('salas.index',compact('sala'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sala=salas::all();
        return view ('salas.create',compact('sala'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_salas=request()->except('_token');
        salas::insert($datos_salas);
        return response()->json($datos_salas);
    }

    /**
     * Display the specified resource.
     */
    public function show(salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $sala = salas::findOrFail($id);
        return view('salas.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $datos_salas=request()->except(['_token','_method']);
        salas::where('id','=',$id)->update($datos_salas);
        
        $sala = salas::findOrfail($id);
        return view('salas.edit',compact('sala'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        salas::destroy($id);
        return redirect('Salas');
    }
}
