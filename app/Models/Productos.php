<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = '_productos';
    public function modelos()
    {
        return $this->belongsToMany(Modelos::class, '_producto__modelo', 'producto-id', 'modelo-id');
    }
}
