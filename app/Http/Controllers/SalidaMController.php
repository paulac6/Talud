<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\SalidaM;
use App\Models\Tipo;
use App\Models\Salid;
use App\Models\Material;

class SalidaMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salida_material = SalidaM::all();
        return view('/salidam/index',compact('salida_material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = Material::orderBy('nombre')->get();
        $salida = Salid::orderBy('fechaSalida')->get();
        $salidam = new SalidaM();
        return view('/salidam/create',compact('salidam','materials','salida'));
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
        $material->cantidad -=$request ->cantidadMaterial;
        $material->save();

        $salidam  = $request->all();
        SalidaM::create($salidam);
        return redirect()->route('salida.index');
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
        $salidam=SalidaM::find($id);
        $tipos = Tipo::orderBy('nombre')->get();
        $salida = Salid::orderBy('fechaSalida')->get();
        return view('/salidam/edit',compact('salidam','tipos','salida'));
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
        $salidam=Salidam::find($id);

        $salida = $request->all();
        $salidam->update($salida);
        return redirect()->route('salida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salidam=SalidaM::find($id);

        if($salidam->estado == 'Entregado'){
            $estado='Pendiente';
        }else{
            $estado='Entregado';
        }
        $valor=array('estado'=>$estado);
        DB::table('salida_material')->where('id',$salidam->id)->update($valor);
        return redirect()->route('salida.index');;
    }
}