<?php

namespace App\Http\Controllers;

use App\Models\peliculas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       // $pelicula=Peliculas::all();
       $pelicula = DB::table('peliculas')
       ->select('peliculas.*','generos.nombre as nombre_genero','directores.nombre as directores_nombres')
       ->join('directores', 'directores.id', '=', 'peliculas.director_id')
       ->join('generos', 'generos.id', '=', 'peliculas.genero_id')
       ->get();
       
       return view ('peliculas.index',compact('pelicula'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelicula=peliculas::all();
        return view ('peliculas.create',compact('pelicula'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos_peliculas=request()->except('_token');
        peliculas::insert($datos_peliculas);
        return response()->json($datos_peliculas);
    }

    /**
     * Display the specified resource.
     */
    public function show(peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = peliculas::findOrFail($id);
        return view('peliculas.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $datos_peliculas=request()->except(['_token','_method']);
        peliculas::where('id','=',$id)->update($datos_peliculas);
        
        $pelicula = peliculas::findOrfail($id);
        return view('peliculas.edit',compact('pelicula'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        peliculas::destroy($id);
        return redirect('Peliculas');
    }
}
