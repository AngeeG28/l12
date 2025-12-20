<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = [
        'user_id',
        'producto_sku',
        'cantidad',
    ];

public function producto(){
     return $this->belongsTo(productos::class, 'sku', 'producto_sku');
    }
}
