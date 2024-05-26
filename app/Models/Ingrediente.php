<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function categ_ingrediente()
    {
        return $this->belongsTo(Categ_Ingrediente::class);
    }
    public function platos()
    {
        return $this->belongsToMany(Plato::class);
    }

}
