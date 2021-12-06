<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\EntradaM;
use App\Models\Tipo;
use App\Models\Entrad;
use App\Models\Material;

class EntradaMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrada_material = EntradaM::all();
        return view('/entradam/index',compact('entrada_material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = Material::orderBy('nombre')->get();
        $entrada = Entrad::orderBy('fechaEntrada')->get();
        $entradam = new EntradaM();
        return view('/entradam/create',compact('entradam','materials','entrada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = Material::findOrFail($request ->material_id);
        $material->cantidad +=$request ->cantidadMaterial;
        $material->save();

        $entradam  = $request->all();
        EntradaM::create($entradam);
        return redirect()->route('entrada.index');
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
        $entradam=EntradaM::find($id);
        $materials = Material::orderBy('nombre')->get();
        $entrada = Entrad::orderBy('fechaEntrada')->get();
        return view('/entradam/edit',compact('entradam','materials','entrada'));
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
        $entradam=Entradam::find($id);

        $entrada = $request->all();
        $entradam->update($entrada);
        return redirect()->route('entrada.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entradam=EntradaM::find($id);

        if($entradam->estado == 'Activo'){
            $estado='Inactivo';
        }else{
            $estado='Activo';
        }
        $valor=array('estado'=>$estado);
        DB::table('entrada_material')->where('id',$entradam->id)->update($valor);
        return redirect()->route('entrada.index');;
    }
}