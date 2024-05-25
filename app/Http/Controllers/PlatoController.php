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
    public function view()
    {
        $data = Plato::all();
        return Inertia::render('Platos/View', ['data' => $data]);
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
