<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserva=Reservas::all();
        return view ('reservas.index',compact('reserva'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reserva=reservas::all();
        return view ('reservas.create',compact('reserva'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_reservas=request()->except('_token');
        reservas::insert($datos_reservas);
        return response()->json($datos_reservas);
    }

    /**
     * Display the specified resource.
     */
    public function show(reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $reserva = reservas::findOrFail($id);
        return view('reservas.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos_reservas=request()->except(['_token','_method']);
        reservas::where('id','=',$id)->update($datos_reservas);
        
        $reserva = reservas::findOrfail($id);
        return view('reservas.edit',compact('reserva'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        reservas::destroy($id);
        return redirect('Reservas');
    }
}
