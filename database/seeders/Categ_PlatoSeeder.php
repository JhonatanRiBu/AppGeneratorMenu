<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categ_Plato;

class Categ_PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categ_Plato::create([
            'name' => 'menestra'
        ]);
        Categ_Plato::create([
            'name' => 'guiso'
        ]);
        Categ_Plato::create([
            'name' => 'salteado'
        ]);
        Categ_Plato::create([
            'name' => 'estofado'
        ]);
        Categ_Plato::create([
            'name' => 'pasta'
        ]);
        Categ_Plato::create([
            'name' => 'fritura'
        ]);
        Categ_Plato::create([
            'name' => 'Arroces'
        ]);
    }
}
