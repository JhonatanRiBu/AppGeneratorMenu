<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categ_Plato extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function platos()
    {
        return $this->hasMany(Plato::class);
    }
}
