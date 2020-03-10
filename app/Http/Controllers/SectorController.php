<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', $sector = new Sector);
        $sector = new Sector;

        return view('sectors.index', [
            'sectors' => $sector->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $sector = new Sector);

        $pisos = \App\Piso::all();

        return view('sectors.create', compact('sector', 'pisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->authorize('create', new Sector);

        $sector = Sector::create($request->all());

        return redirect()->route('sectors.index')->with('flash', 'ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show(Sector $sector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
        $this->authorize('update', $sector);

        return view('sectors.edit', [
            'sector' => $sector,
            'pisos' => \App\Piso::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sector $sector)
    {
        $this->authorize('update', $sector);

        try {
            $sector->update($request->all());

            return redirect()->route('sectors.index')->with('flash', 'ha sido modificado con exito');

        } catch (\Throwable $th) {

            return redirect()->route('sectors.edit', $sector)->with('danger', 'hubo un error al actualizar '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sector $sector)
    {
        $this->authorize('delete', $sector);

        try {
            //se elimina el sector
            $sector->delete();

            return redirect()->route('sectors.index')->with('flash', 'ha sido eliminada con exito');
        } catch (\Throwable $th) {

            return redirect()->route('sectors.edit', $sector)->with('danger', 'hubo un error al eliminar '.$th->getMessage());

        }
    }
}
