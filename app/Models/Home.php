<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
public function home()
{
    $categorias = Categoria::all();

    return view('home', ['categorias' => $categorias]);
}

}
