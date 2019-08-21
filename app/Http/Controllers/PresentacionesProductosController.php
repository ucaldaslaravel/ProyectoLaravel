<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresentacionesProductos;
class PresentacionesProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $presentacionesproductos = PresentacionesProductos::paginate(6);
        return view('presentacionesproductos.index', compact('presentacionesproductos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presentacionesproductos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PresentacionesProductos::create($request->all());
        return redirect()->route('presentacionesproductos.index')->with('info','Presentacion de producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_presentacion_producto)
    {
        $presentacionproducto = PresentacionesProductos::findOrFail($id_presentacion_producto);
        return view('presentacionesproductos.show', compact('presentacionproducto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_presentacion_producto)
    {
        $presentacionproducto = PresentacionesProductos::findOrFail($id_presentacion_producto);
        return view('presentacionesproductos.edit', compact('presentacionproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_presentacion_producto)
    {
        $presentacionproducto =  PresentacionesProductos::findOrFail($id_presentacion_producto);
        $presentacionproducto->update($request->all());
        //$personal->roles()->sync($request->roles);
        return back()->with('info', 'Presentacion producto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_presentacion_producto)
    {
        $cliente =PresentacionesProductos::findOrFail($id_presentacion_producto);
        $cliente->delete();
        return back()->with('info', 'Presentacion producto eliminado');
    }
}
