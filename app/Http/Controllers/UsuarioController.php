<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Role;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('/usuarios/index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new Usuario();
        $roles = Role::orderBy('nombre')->get();
        return view('/usuarios/create',compact('usuario','roles'));
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
                'telcelular'=> 'required | numeric',
                'correo'=> 'required | max:40 | email | unique:usuarios,correo',
                'contraseña'=> 'required | max:40',
                'rol_id'=> 'required'
            ]
            );
        $usuario = $request->all();
        Usuario::create($usuario);
        return redirect()->route('usuario.index');
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
    public function edit(Usuario $usuario)
    {
        $roles = Role::orderBy('nombre')->get();
        return view('/usuarios/edit',compact('usuario','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Usuario $usuario)
    {
        $request->validate(
            [
                'nombre'=> 'required | max:40',
                'apellido'=> 'required | max:40',
                'telcelular'=> 'required | numeric',
                'correo'=> 'required | max:40 | email | unique:usuarios,correo,'.$usuario->id,
                'contraseña'=> 'required | max:40',
                'rol_id'=> 'required'
            ]
            );
        $usuarios = $request->all();
        $usuario->update($usuarios);
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        if($usuario->estado == 1){
            $estado=0;
        }else{
            $estado=1;
        }
        $valor=array('estado'=>$estado);
        DB::table('usuarios')->where('id',$usuario->id)->update($valor);
        return redirect()->route('usuario.index');;
    }
}