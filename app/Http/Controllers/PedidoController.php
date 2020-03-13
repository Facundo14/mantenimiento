<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use App\Prioridad;
use App\Sector;

class PedidoController extends Controller
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
        //$this->authorize('view');

        return view('pedidos.index', [
            'pedidos' => Pedido::all(),
            'pendiente' => Pedido::all()->where('estado','=','pendiente')->count(),
            'terminados' => Pedido::all()->where('estado','=','terminado')->count(),
            'proceso' => Pedido::all()->where('estado','=','proceso')->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', $pedido = new Pedido);

        $prioridads = Prioridad::all();
        $sectors = Sector::all();
        $pendiente = Pedido::all()->where('estado','=','pendiente')->count();
        $terminados = Pedido::all()->where('estado','=','terminado')->count();
        $proceso = Pedido::all()->where('estado','=','proceso')->count();

        return view('pedidos.create', compact('pedido','prioridads','sectors', 'cantidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = Pedido::create([
            'pedido' => $request->pedido,
            'sector_id' => $request->sector_id,
            'prioridad_id' => $request->prioridad_id,
            'user_id' => auth()->user()->id,
            'observaciones' => $request->observaciones
        ]);

        alert()->success('Agregado correctamente!')->autoclose(1800);

        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
