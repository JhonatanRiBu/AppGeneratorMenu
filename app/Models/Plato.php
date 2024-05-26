<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function categ_plato()
    {
        return $this->belongsTo(Categ_Plato::class);
    }
    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class);
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
