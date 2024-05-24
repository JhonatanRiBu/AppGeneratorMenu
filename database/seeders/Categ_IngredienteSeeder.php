<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categ_Ingrediente;

class Categ_IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categ_Ingrediente::create([
            'name' => 'verduras'
        ]);
        Categ_Ingrediente::create([
            'name' => 'abarrotes'
        ]);
        Categ_Ingrediente::create([
            'name' => 'condimentos'
        ]);
        Categ_Ingrediente::create([
            'name' => 'proteinas'
        ]);
        Categ_Ingrediente::create([
            'name' => 'complementos'
        ]);
    }
}
