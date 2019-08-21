<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\DetallesVentas;
use App\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Ventas::paginate(7);
        return view('ventas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create');
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

        $venta = Ventas::create([
            'fecha_venta' => Carbon::now(),

            'total_credito' => floatval($request->total_credito), 
            'total_contado'=> floatval($request->total_contado),
            'id_cliente' => intval($request->id_cliente),
            'id_vendedor' => intval($request->id_vendedor)
        ]);

        //print_r($venta->id_venta);
        //die();

        $detallesventa = DetallesVentas::create([
            'cantidad' => $request->input('cantidad_producto'), 
            'valor_producto'=> $request->input('valor_producto'),
            'descuento'=> $request->input('descuento'),
            'iva'=> $request->input('iva'),
            'id_producto' => $request->input('id_producto'),
            'id_venta' => $venta->id_venta
           

        ]);


        return redirect()->route('ventas.index')->with('info','Venta creada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Ventas::findOrFail($id);
        return view('ventas.show', compact('venta'));
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
