<?php

namespace App\Http\Controllers;

use App\Models\Favorito_categoria;
use App\Models\Favorito;
use App\Models\Categoria;
use Illuminate\Http\Request;

class FavoritoCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos['favorito_categorias']=Favorito_categoria::paginate(10);
        $categorias = Categoria::all();
        $favoritos = Favorito::all();
        return view('favorito_categoria/create', $datos, compact('favoritos','categorias'));
        
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
        $datosFavoritoC = new Favorito_categoria;        
        $datosFavoritoC->categoria_id = $request->categoria_id;
        $datosFavoritoC->favorito_id = $request->favorito_id;
        $datosFavoritoC->user_id = $request->user()->id;
        $datosFavoritoC->save();

        return redirect('favorito')->with('msn','Categoría añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorito_categoria  $favorito_categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Favorito_categoria $favorito_categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorito_categoria  $favorito_categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = Categoria::all();
        $favoritos = Favorito::all();
        return view('favorito.edit', compact('favoritos','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorito_categoria  $favorito_categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorito_categoria $favorito_categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorito_categoria  $favorito_categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorito_categoria $favorito_categoria)
    {
        //
    }
}
