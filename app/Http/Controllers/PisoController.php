<?php

namespace App\Http\Controllers;

use App\Piso;
use Illuminate\Http\Request;

class PisoController extends Controller
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
        $this->authorize('view', $piso = new Piso);
        $piso = new Piso;

        return view('pisos.index', [
            'pisos' => $piso->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $piso = new Piso);

        return view('pisos.create', compact('piso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->authorize('create', new Piso);

        $piso = Piso::create($request->all());

        return redirect()->route('pisos.index')->with('flash', 'ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function show(Piso $piso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function edit(Piso $piso)
    {
        $this->authorize('update', $piso);

        return view('pisos.edit', [
            'piso' => $piso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piso $piso)
    {
        $this->authorize('update', $piso);

        try {
            $piso->update($request->all());

            return redirect()->route('pisos.index')->with('flash', 'ha sido modificado con exito');

        } catch (\Throwable $th) {

            return redirect()->route('pisos.edit', $piso)->with('danger', 'hubo un error al actualizar '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piso $piso)
    {
        $this->authorize('delete', $piso);

        try {
            //se elimina el piso
            $piso->delete();

            return redirect()->route('pisos.index')->with('flash', 'ha sido eliminada con exito');
        } catch (\Throwable $th) {

            return redirect()->route('pisos.edit', $piso)->with('danger', 'hubo un error al eliminar '.$th->getMessage());

        }
    }
}
