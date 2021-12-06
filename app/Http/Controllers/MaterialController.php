<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Tipo;
use App\Models\Marca;
use App\Models\Proveedore;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        return view('/materiales/index',compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = new Material();
        $tipos = Tipo::orderBy('nombre')->get();
        $marcas = Marca::orderBy('nombre')->get();
        $proveedores = Proveedore::orderBy('nombre')->get();
        return view('/materiales/create',compact('material','tipos','marcas','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = $request->all();
        Material::create($material);
        return redirect()->route('material.index');
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
    public function edit(Material $material)
    {
        $tipos = Tipo::orderBy('nombre')->get();
        $marcas = Marca::orderBy('nombre')->get();
        $proveedores = Proveedore::orderBy('nombre')->get();
        return view('/materiales/edit',compact('material','tipos','marcas','proveedores'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $materiale = $request->all();
        $material->update($materiale);
        return redirect()->route('material.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        if($material->estado == 1){
            $estado=0;
        }else{
            $estado=1;
        }
        $valor=array('estado'=>$estado);
        DB::table('materials')->where('id',$material->id)->update($valor);
        return redirect()->route('material.index');;
    }
}