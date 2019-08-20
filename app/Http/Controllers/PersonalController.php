<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarPersonalRequest;
use App\Http\Requests\CrearPersonalRequest;
use App\Personal;

use Illuminate\Http\Request;

class PersonalController extends Controller
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
        $personal = Personal::all();
        return view('personal.index',compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['Administrador','Vendedor'];
        return view('personal.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearPersonalRequest $request)
    {

        //print_r($request->all());
        $persona = Personal::create($request->all());
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::findOrFail($id);
        //$this->authorize($persona);
        $roles = ['Administrador','Vendedor'];
        return view('personal.edit', compact('personal','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPersonalRequest $request, $id)
    {
        $personal = Personal::findOrFail($id);
        //$this->authorize($personal);
        $personal->update($request->all());
        //$personal->roles()->sync($request->roles);
        return back()->with('info', 'Usuario del personal actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();
        return back()->with('info', 'Usuario del personal eliminado');
    }
}
