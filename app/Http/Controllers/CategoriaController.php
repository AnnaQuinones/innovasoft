<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['categorias']=Categoria::paginate(5);
        return view('categoria.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación para que no haya campos vacíos
        $campos=[
            'nombreCategoria'=>'required|string|max:50'
        ];
        //Mensaje para el usuario, indicado los campos que son requeridos
        $msn=[
            'required'=>'El :attribute es requerido'
        ];
        //Lo que envía el usuario es validado y se muestra el mensaje
        $this->validate($request, $campos, $msn);


        $datosCategoria = request()->except('_token');
        Categoria::insert($datosCategoria);
        return redirect('categoria')->with('msn','Categoría creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCategoria = request()->except(['_token','_method']); 

        Categoria::where('id','=',$id)->update($datosCategoria);
        $categoria = Categoria::findOrFail($id);        
        return redirect('categoria')->with('msn','Categoría modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Categoria::destroy($id);
        return redirect('categoria')->with('msn','Categoría eliminada');

    }
}
