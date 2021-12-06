<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('/clientes/index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        return view('/clientes/create',compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre'=> 'required | max:40',
                'correo'=> 'required | max:40 | email | unique:clientes,correo',
                'telefono'=> 'required | numeric',
                'direccion'=> 'required | max:50',
            ]
            );
        $cliente = $request->all();
        Cliente::create($cliente);
        return redirect()->route('cliente.index');
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
    public function edit(Cliente $cliente)
    {
        return view('/clientes/edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate(
            [
                'nombre'=> 'required | max:40',
                'correo'=> 'required | max:40 | email | unique:clientes,correo,'.$cliente->id,
                'telefono'=> 'required | numeric',
                'direccion'=> 'required | max:50',
            ]
            );
        $clientees = $request->all();
        $cliente->update($clientees);
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if($cliente->estado == 1){
            $estado=0;
        }else{
            $estado=1;
        }
        $valor=array('estado'=>$estado);
        DB::table('clientes')->where('id',$cliente->id)->update($valor);
        return redirect()->route('cliente.index');;
    }
}