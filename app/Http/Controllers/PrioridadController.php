<?php

namespace App\Http\Controllers;

use App\Prioridad;
use Illuminate\Http\Request;

class PrioridadController extends Controller
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
        $this->authorize('view', $prioridad = new Prioridad);
        $prioridad = new Prioridad;

        return view('prioridads.index', [
            'prioridads' => $prioridad->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $prioridad = new Prioridad);

        return view('prioridads.create', compact('prioridad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', new Prioridad);

        $prioridad = Prioridad::create($request->all());

        return redirect()->route('prioridads.index')->with('flash', 'ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prioridad  $prioridad
     * @return \Illuminate\Http\Response
     */
    public function show(Prioridad $prioridad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prioridad  $prioridad
     * @return \Illuminate\Http\Response
     */
    public function edit(Prioridad $prioridad)
    {
        $this->authorize('update', $prioridad);

        return view('prioridads.edit', [
            'prioridad' => $prioridad
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prioridad  $prioridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prioridad $prioridad)
    {
        $this->authorize('update', $prioridad);

        try {
            $prioridad->update($request->all());

            return redirect()->route('prioridads.index')->with('flash', 'ha sido modificado con exito');

        } catch (\Throwable $th) {

            return redirect()->route('prioridads.edit', $prioridad)->with('danger', 'hubo un error al actualizar '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prioridad  $prioridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prioridad $prioridad)
    {
        $this->authorize('delete', $prioridad);

        try {
            //se elimina el prioridad
            $prioridad->delete();

            return redirect()->route('prioridads.index')->with('flash', 'ha sido eliminada con exito');
        } catch (\Throwable $th) {

            return redirect()->route('prioridads.edit', $prioridad)->with('danger', 'hubo un error al eliminar '.$th->getMessage());

        }
    }
}
