<?php

namespace App\Http\Controllers;

use App\Models\Categ_Plato;
use App\Models\Ingrediente;
use App\Models\Menu;
use App\Models\Plato;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\PlatoRequest;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::paginate(5);
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
        $menus = Menu::all();

        return inertia('Platos/Create',
        [
            'categ_platos' => $categ_platos,
            'menus' => $menus,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlatoRequest $request)
    {
        Plato::create($request->validated());
        return redirect()->route('platos.index');
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
    public function edit(Plato $plato)
    {
        //$categ_platos = Categ_Plato::where('id',$plato->categ_plato_id)->get();
        $categ_platos = Categ_Plato::select()->get();
        return inertia('Platos/Edit', ['plato' => $plato, 'categ_platos' => $categ_platos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlatoRequest $request, Plato $plato)
    {
        $plato->update($request->validated());
        return redirect()->route('platos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plato $plato)
    {
        $plato->delete();
        return redirect()->route('platos.index');
    }
}
