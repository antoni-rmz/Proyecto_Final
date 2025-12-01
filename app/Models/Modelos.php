<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $table = '_modelos';
    public function productos()
    {
        return $this->belongsToMany(Productos::class, '_producto__modelo', 'modelo-id', 'producto-id');
    }
}
