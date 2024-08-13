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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(clacificaciones $clacificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clacificaciones $clacificaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clacificaciones $clacificaciones)
    {
        //
    }
}
