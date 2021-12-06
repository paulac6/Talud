<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Obra;
use App\Models\Tipo;
use App\Models\Cliente;
use App\Models\Categoria;
use App\Models\Usuario;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::all();
        return view('/obras/index',compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obra = new Obra();
        $tipos = Tipo::orderBy('nombre')->get();
        $clientes = Cliente::orderBy('nombre')->get();
        $categorias = Categoria::orderBy('nombre')->get();
        $usuarios = Usuario::orderBy('nombre')->get();
        return view('/obras/create',compact('obra','tipos','clientes','categorias','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obra = $request->all();
        Obra::create($obra);
        return redirect()->route('obra.index');
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
    public function edit(Obra $obra)
    {
        $tipos = Tipo::orderBy('nombre')->get();
        $clientes = Cliente::orderBy('nombre')->get();
        $categorias = Categoria::orderBy('nombre')->get();
        $usuarios = Usuario::orderBy('nombre')->get();
        return view('/obras/edit',compact('obra','tipos','clientes','categorias','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Obra $obra)
    {
        $obraa = $request->all();
        $obra->update($obraa);
        return redirect()->route('obra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        if($obra->estado == 1){
            $estado=0;
        }else{
            $estado=1;
        }
        $valor=array('estado'=>$estado);
        DB::table('obras')->where('id',$obra->id)->update($valor);
        return redirect()->route('obra.index');;
    }
}