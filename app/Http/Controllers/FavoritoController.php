<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\Categoria;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['favoritos']=Favorito::paginate(10);
        return view('favorito.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('favorito.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosFavorito = request()->except('_token');
        Favorito::insert($datosFavorito);
        return redirect('favorito')->with('msn','Sitio favorito creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function show(Favorito $favorito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $favorito = Favorito::findOrFail($id);
        $categorias = Categoria::all();
        return view('favorito.edit', compact('favorito','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosFavorito = request()->except(['_token','_method']); 

        Favorito::where('id','=',$id)->update($datosFavorito);
        $favorito = Favorito::findOrFail($id);        
        return redirect('favorito')->with('msn','Sitio favorito modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorito  $favorito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Favorito::destroy($id);
        return redirect('favorito')->with('msn','Sitio favorito eliminado');
    }
}
