<?php

namespace App\Http\Controllers;

use App\BajasProductos;
use App\Productos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BajasProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bajas = BajasProductos::paginate(6);
        return view('bajasproductos.index', compact('bajas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bajasproductos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = $request->all();
        $producto = Productos::findOrFail($r['id_producto']);
        $resultante = $producto->cantidad_disponible - intval($r['cantidad']);
        $producto->update(['cantidad_disponible' => $resultante >= 0 ? $resultante:0]);
        $r['fecha'] = Carbon::now();
        BajasProductos::create($r);
        return redirect()->route('bajasproductos.index')->with('info','Baja de producto creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baja = BajasProductos::findOrFail($id);
        return view('bajasproductos.show', compact('baja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baja = BajasProductos::findOrFail($id);
        return view('bajasproductos.edit', compact('baja'));
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
        $baja = BajasProductos::findOrFail($id);
        $baja->update($request->all());
        return back()->with('info', 'Baja de producto actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baja = BajasProductos::findOrFail($id);
        $baja->delete();
        return back()->with('info', 'Baja de producto eliminada');
    }
}
