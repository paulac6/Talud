<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'materiales'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Materiales</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-4 py-2">ID</th>
                                                        <th class="px-4 py-2">NOMBRE</th>
                <th class="px-4 py-2">PESO</th>
                <th class="px-4 py-2">TAMAÑO</th>
                <th class="px-4 py-2">CANTIDAD</th>
                <th class="px-4 py-2">SITUACION</th>
                <th class="px-4 py-2">ESTADO</th>
                <th class="px-4 py-2">MARCA</th>
                <th class="px-4 py-2">PROOVEDOR</th>
                <th class="px-4 py-2">ACCIONES</th>
														</tr>
													</thead>
        <tbody>
            @foreach($materials as $material)
            <tr>
                <td class="border px-4 py-2">{{$material->id}}</td>
                <td class="border px-4 py-2">{{$material->nombre}}</td>
                <td class="border px-4 py-2">{{$material->peso}}</td>
                <td class="border px-4 py-2">{{$material->tamaño}}</td>
                <td class="border px-4 py-2">{{$material->cantidad}}</td>
                <td class="border px-4 py-2">{{$material->situacion}}</td>
                <td class="border px-4 py-2">{{$material->estado}}</td>
                <td class="border px-4 py-2">{{$material->marca->nombre}}</td>
                <td class="border px-4 py-2">{{$material->proveedor->nombre}}</td>
                <td class="border px-4 py-2 text-center">
                    <a href="{{route('material.edit',$material->id)}}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('material.destroy',$material->id)}}"  method="POST">
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
</div>
@endsection