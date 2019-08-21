<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Clientes;
use App\Http\Requests\CrearClienteRequest;

class ClientesController extends Controller
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
        $clientes = Clientes::paginate(6);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //print_r($request->all());
        Clientes::create($request->all());
        return redirect()->route('clientes.index')->with('info','Usuario creado');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
        /*$mensaje = DB::table('clientes')->where('id_cliente',
        $id_cliente)->first();
        return view('clientes.index', compact('cliente'));*/
        $cliente = Clientes::findOrFail($id_cliente);
        return view('clientes.show', compact('cliente'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {   
        /*$cliente = DB::table('clientes')->where('id_cliente', $id_cliente)->first();
        return view('clientes.edit', compact('cliente'));*/
        $cliente = Clientes::findOrFail($id_cliente);
        return view('clientes.edit', compact('cliente'));
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
        /*DB::table('clientes')->where('id_cliente', $id)->update([
            'nombre' => $request->input('nombre'),
            'telefonos' => $request->input('telefonos'),
            'direccion' => $request->input('direccion'),
            'con_credito' => $request->input('con_credito'),
            'updated_at' => Carbon::now()
        ]);
        return redirect()->route('clientes.index');*/
        $cliente = Clientes::findOrFail($id_cliente);
        $cliente->update($request->all());
        //$personal->roles()->sync($request->roles);
        return back()->with('info', 'Cliente actualizado');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        /*DB::table('clientes')->where('id_cliente', $id_cliente)->delete();
       return redirect()->route('clientes.index');*/
        $cliente = Clientes::findOrFail($id_cliente);
        $cliente->delete();
        return back()->with('info', 'Cliente eliminado');

    
    }
}
