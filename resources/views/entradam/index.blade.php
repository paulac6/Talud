<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'entradam'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Entrada Material</h2>
										</div>
                                        <a href="{{route('entrada.create')}}">
						<span>Registrar</span>
						</a>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">CANTIDAD MATERIAL</th>
                <th class="px-1 py-2">ESTADO</th>
                <th class="px-1 py-2">OBSERVACION</th>
                <th class="px-1 py-2">MATERIAL</th>
                <th class="px-1 py-2">ENTRADA</th>
                <th class="px-1 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entrada_material as $entrada)
            <tr>
                <td class="border px-1 py-2">{{$entrada->id}}</td>
                <td class="border px-1 py-2">{{$entrada->cantidadMaterial}}</td>
                <td class="border px-1 py-2">{{$entrada->estado}}</td>
                <td class="border px-1 py-2">{{$entrada->observacion}}</td>
                <td class="border px-1 py-2">{{$entrada->material->nombre}}</td>
                <td class="border px-1 py-2">{{$entrada->entrada->fechaEntrada}}</td>    
                <td class="border px-1 py-2 text-center">
                <a href="{{route('entrada.edit',$entrada->id)}}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('entrada.destroy',$entrada->id)}}"  method="POST">
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
</html>
@endsection