<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Productos extends Model
{
    use HasFactory;

    public function modelos()
    {
        return $this->belongsToMany(Modelos::class, 'producto_modelo', 'productos_id', 'modelos_id');
    }
}