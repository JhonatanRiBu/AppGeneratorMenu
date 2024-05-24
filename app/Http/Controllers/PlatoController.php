<?php

namespace App\Http\Controllers;

use App\Models\Categ_Plato;
use App\Models\Ingrediente;
use App\Models\Menu;
use App\Models\Plato;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::paginate(25);
        return inertia('Platos/Index',['platos'=>$platos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categ_platos = Categ_Plato::all();
        $ingredientes_condimentos = Ingrediente::where('categ_ingrediente_id',3)->get();
        $ingredientes_abarrotes = Ingrediente::where('categ_ingrediente_id', 2)->get();
        $ingredientes_verduras= Ingrediente::where('categ_ingrediente_id', 1)->get();
        $ingredientes_proteinas = Ingrediente::where('categ_ingrediente_id', 4)->get();
        $ingredientes_complementos = Ingrediente::where('categ_ingrediente_id', 5)->get();
        $menus = Menu::all();

        return inertia('Platos/Create',
        [
            'categ_platos' => $categ_platos,
            'ingredientes_condimentos' => $ingredientes_condimentos,
            'ingredientes_abarrotes' => $ingredientes_abarrotes,
            'ingredientes_verduras' => $ingredientes_verduras,
            'ingredientes_proteinas' => $ingredientes_proteinas,
            'ingredientes_complementos' => $ingredientes_complementos,
            'menus' => $menus,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
