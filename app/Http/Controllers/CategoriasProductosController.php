<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriasProductos;

class CategoriasProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriasProductos::paginate(6);
        return view('CategoriasProductos.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CategoriasProductos.create');
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
        CategoriasProductos::create($request->all());
        return redirect()->route('categoria.index')->with('info','Categoria creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = CategoriasProductos::findOrFail($id);
        return view('CategoriasProductos.show', compact('categoria'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $categoria = CategoriasProductos::findOrFail($id);
        return view('CategoriasProductos.edit', compact('categoria'));
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
        $categoria = CategoriasProductos::findOrFail($id);
        $categoria->update($request->all());

        //$personal->roles()->sync($request->roles);
        return back()->with('info', 'Categoria actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = CategoriasProductos::findOrFail($id);
        $categoria->delete();
        return back()->with('info', 'Categoria eliminado');
    }
}
