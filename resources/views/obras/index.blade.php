<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
@extends('layouts.main',['active'=>'obras'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Obras</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">NOMBRE</th>
                <th class="px-1 py-2">FECHA INICIO</th>
                <th class="px-1 py-2">FECHA ENTREGA</th>
                <th class="px-1 py-2">ESTADO</th>
                <th class="px-1 py-2">CANTIDAD MATERIAL</th>
                <th class="px-1 py-2">TIPO</th>
                <th class="px-1 py-2">CLIENTE</th>
                <th class="px-1 py-2">CATEGORIA</th>
                <th class="px-1 py-2">USUARIO</th>
                <th class="px-1 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obras as $obra)
            <tr>
                <td class="border px-1 py-2">{{$obra->id}}</td>
                <td class="border px-1 py-2">{{$obra->nombre}}</td>
                <td class="border px-1 py-2">{{$obra->fechaInicio}}</td>
                <td class="border px-1 py-2">{{$obra->fechaEntrega}}</td>
                <td class="border px-1 py-2">{{$obra->estado}}</td>
                <td class="border px-1 py-2">{{$obra->cantidadMaterial}}</td>
                <td class="border px-1 py-2">{{$obra->tipo->nombre}}</td>
                <td class="border px-1 py-2">{{$obra->cliente->nombre}}</td>
                <td class="border px-1 py-2">{{$obra->categoria->nombre}}</td>
                <td class="border px-1 py-2">{{$obra->usuario->nombre}}</td>
                <td class="border px-1 py-2 text-center">
                <a href="{{route('obra.edit',$obra->id)}}"
                        class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('obra.destroy',$obra->id)}}"  method="POST">
                            @method('delete')
                            @csrf
                    <button class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4" 
                        type="submit">Eliminar</button>
</form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div> 
    </html>
    @endsection