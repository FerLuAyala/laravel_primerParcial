<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
    //return view('welcome');
    $allCategorias = Categoria::all();

    return view('home' , ['categorias' => $allCategorias]);
   }
public function view($categoria_id){
    return view ('view', [
    'categoria' => Categoria::findOrfail($categoria_id)
    ]);
   }
}
