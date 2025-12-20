<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    // Nombre de la tabla (opcional si coincide con el plural del modelo)
    protected $table = 'productos';

    // La clave primaria en la tabla es `sku`, no `id`
    protected $primaryKey = 'sku';

    // Evita que Eloquent espere una columna incrementable `id`
    public $incrementing = false;
}
