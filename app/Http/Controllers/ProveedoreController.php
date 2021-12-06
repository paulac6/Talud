<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Proveedore;

class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedore::all();
        return view('/proveedores/index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedore = new Proveedore();
        return view('/proveedores/create',compact('proveedore'));
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
                'apellido'=> 'required | max:40',
                'tipodoc'=> 'required | max:10',
                'numerodoc'=> 'required | numeric  | unique:proveedores,numerodoc',
                'telcelular'=> 'required | numeric',
                'correo'=> 'required | max:40 | email'
            ]
            );
        $proveedore = $request->all();
        Proveedore::create($proveedore);
        return redirect()->route('proveedore.index');
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
    public function edit(Proveedore $proveedore)
    {
        return view('/proveedores/edit',compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedore $proveedore)
    {
        $request->validate(
            [
                'nombre'=> 'required | max:40',
                'apellido'=> 'required | max:40',
                'tipodoc'=> 'required | max:10',
                'numerodoc'=> 'required | numeric  | unique:proveedores,numerodoc,'.$proveedore->id,
                'telcelular'=> 'required | numeric',
                'correo'=> 'required | max:40 | email'
            ]
            );
        $proveedorees = $request->all();
        $proveedore->update($proveedorees);
        return redirect()->route('proveedore.index');
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