<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'categoria_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'intro',
        'icono',
        'subtitle',
        'detalle',
    ];

    // Relación: una categoría tiene muchos servicios
    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'categoria_id', 'categoria_id');
    }


public function mostrarServiciosPorCategoria($id)
{
    $categoria = Categoria::with('servicios')->where('categoria_id', $id)->firstOrFail();

    return view('servicios.por_categoria', compact('categoria'));
}

}
