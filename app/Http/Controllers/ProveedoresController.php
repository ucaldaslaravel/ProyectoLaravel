<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
class ProveedoresController extends Controller
{   
    function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedores::paginate(6);
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());
        Provedoress::create($request->all());
        return redirect()->route('proveedores.index')->with('info','Usuario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_proveedor)
    {
        $proveedor = Proveedores::findOrFail($id_proveedor);
        return view('proveedores.show', compact('proveedor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_proveedor)
    {  $proveedor = Proveedores::findOrFail($id_proveedor);
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_proveedor)
    {
        $proveedor = Proveedores::findOrFail($id_proveedor);
        $proveeedor->update($request->all());

        //$personal->roles()->sync($request->roles);
        return back()->with('info', 'Proveedor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_proveedor)
    {
        $proveedor = Proveedores::findOrFail($id_proveedor);
        $proveedor->delete();
        return back()->with('info', 'Proveedor eliminado');
    }
}
