<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = 
    [ 
        'sku', 'nombre', 'id_categoria', 'descripcion', 'precio', 'cantidad'
    ];
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');   
    }
}
