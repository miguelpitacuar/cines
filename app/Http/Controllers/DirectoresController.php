<?php

namespace App\Http\Controllers;

use App\Models\directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $director=Directores::all();
        return view ('directores.index',compact('director'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $director=directores::all();
        return view ('directores.create',compact('director'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_directores=request()->except('_token');
        directores::insert($datos_directores);
        return response()->json($datos_directores);
    }

    /**
     * Display the specified resource.
     */
    public function show(directores $directores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $director = directores::findOrFail($id);
        return view('directores.edit', compact('director'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos_directores=request()->except(['_token','_method']);
        directores::where('id','=',$id)->update($datos_directores);
        
        $director = directores::findOrfail($id);
        return view('directores.edit',compact('director'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        directores::destroy($id);
        return redirect('Directores');
    }
}
