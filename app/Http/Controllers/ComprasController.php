<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\DetallesCompras;
use App\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compras::paginate(7);
        return view('compras.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //die();

        $compra = Compras::create([
            'fecha_compra' => Carbon::now(),
            'fecha_recibido' => Carbon::now(),
            'total_credito' => floatval($request->total_credito), 
            'total_contado'=> floatval($request->total_contado),
            'id_proveedor' => intval($request->id_proveedor)
        ]);

        //print_r($venta->id_venta);
        //die();

        $detallescompra = DetallesCompras::create([
            'cantidad_pedida' => $request->input('cantidad_pedida'), 
            'cantidad_recibida' => $request->input('cantidad_producto'), 
            'valor_producto'=> $request->input('valor_producto'),
            'iva'=> $request->input('iva'),
            'id_producto' => $request->input('id_producto'),
            'id_compra' => $compra->id_compra
           

        ]);


        return redirect()->route('compras.index')->with('info','Compra creada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = Compras::findOrFail($id);
        return view('compras.show', compact('compra'));
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
