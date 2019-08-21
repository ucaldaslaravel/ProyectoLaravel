<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Clientes;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Guardar el mensaje
        DB::table('clientes')->insert([
            'nombre' => $request->input('nombre'),
            'telefonos' => $request->input('telefonos'),
            'direccion' => $request->input('direccion'),
            'con_credito' => $request->input('con_credito')
            
        ]);
        // redireccionar. Más adelante se le pedirá que cambie esto
        return redirect()->route('clientes.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        $mensaje = DB::table('clientes')->where('id_cliente',
        $id_cliente)->first();
        return view('clientes.show', compact('cliente'));


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {   $cliente = DB::table('clientes')->where('id_cliente', $id_cliente)->first();
        return view('clientes.editar', compact('cliente'));
 
    }
     


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        DB::table('clientes')->where('id_cliente', $id)->update([
            'nombre' => $request->input('nombre'),
            'telefonos' => $request->input('telefonos'),
            'direccion' => $request->input('direccion'),
            'con_credito' => $request->input('con_credito'),
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('clientes.index');
 
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        DB::table('clientes')->where('id_cliente', $id_cliente)->delete();
       return redirect()->route('clientes.index');

    
    }
}
