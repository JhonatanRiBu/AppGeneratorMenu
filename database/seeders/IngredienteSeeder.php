<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create([
            'name' => 'lomo de res',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'pollo',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'pavita',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'churrasco',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'chuleta de cerdo',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'filete de pollo plancha',
            'categ_ingrediente_id' => 4
        ]);
        Ingrediente::create([
            'name' => 'cebolla roja',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'tomate',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'ají amarillo',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'cilantro',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'ajo',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'papa',
            'categ_ingrediente_id' => 1
        ]);
        Ingrediente::create([
            'name' => 'arroz',
            'categ_ingrediente_id' => 2
        ]);
        Ingrediente::create([
            'name' => 'sal',
            'categ_ingrediente_id' => 2
        ]);
        Ingrediente::create([
            'name' => 'ajinomoto',
            'categ_ingrediente_id' => 2
        ]);
        Ingrediente::create([
            'name' => 'sillao',
            'categ_ingrediente_id' => 2
        ]);
        Ingrediente::create([
            'name' => 'aji panca',
            'categ_ingrediente_id' => 3
        ]);
        Ingrediente::create([
            'name' => 'aji mirasol',
            'categ_ingrediente_id' => 3
        ]);
        Ingrediente::create([
            'name' => 'queso',
            'categ_ingrediente_id' => 5
        ]);
        Ingrediente::create([
            'name' => 'aceituna',
            'categ_ingrediente_id' => 5
        ]);
        Ingrediente::create([
            'name' => 'pasas',
            'categ_ingrediente_id' => 5
        ]);
    }
}
