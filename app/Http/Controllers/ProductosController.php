<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\PresentacionesProductos;
use App\CategoriasProductos;

class ProductosController extends Controller
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

        $productos = Productos::paginate(6);
        return view('productos.index',compact('productos'));
    
       
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Productos::create(request()->all());

        return redirect()->route('productos.index')->with('info','Producto creado');
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id_producto) {
       $producto = Productos::findOrFail($id_producto);
        return view('productos.show', compact('producto'));
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Productos::findOrFail($id);
        $producto->update($request->all());
        return back()->with('info', 'Productos actualizado');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
        $producto->delete();
        return back()->with('info', 'Productos eliminado');
    }
}
