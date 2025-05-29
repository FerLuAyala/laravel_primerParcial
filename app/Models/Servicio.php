<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primaryKey = 'servicio_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'descripcion',
        'price',
        'categoria_id',
        'img',
    ];

    // Relación: un servicio pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'categoria_id');
    }


}
