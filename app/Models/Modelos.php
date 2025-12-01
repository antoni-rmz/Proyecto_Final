<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modelos extends Model
{
    use HasFactory;

    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'producto_modelo', 'modelos_id', 'productos_id');
    }
}