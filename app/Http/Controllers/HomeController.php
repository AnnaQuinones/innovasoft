<?php

namespace App\Http\Controllers;

use App\Models\Favorito_categoria;
use App\Models\Favorito;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos['favoritos']=Favorito_categoria::join('categorias', 'favorito_categorias.categoria_id', '=', 'categorias.id')
        ->join('favoritos', 'favorito_categorias.favorito_id', '=', 'favoritos.id')
        ->join('users', 'favorito_categorias.user_id', '=', 'users.id')
        ->where('favoritos.visibilidad', 1)
        ->paginate(10);
        return view('home', $datos);
    }
}
