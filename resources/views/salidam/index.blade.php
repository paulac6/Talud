<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'salidam'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Salida Material</h2>
										</div>
                                        <a href="{{route('salida.create')}}">
						<span>Registrar</span>
						</a>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">MATERIAL</th>
                <th class="px-1 py-2">ESTADO</th>
                <th class="px-1 py-2">CANTIDAD MATERIAL</th>
                <th class="px-1 py-2">SALIDA</th>
                <th class="px-1 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salida_material as $salida)
            <tr>
                <td class="border px-1 py-2">{{$salida->id}}</td>
                <td class="border px-1 py-2">{{$salida->material->nombre}}</td>
                <td class="border px-1 py-2">{{$salida->estado}}</td>
                <td class="border px-1 py-2">{{$salida->cantidadMaterial}}</td>
                <td class="border px-1 py-2">{{$salida->salida->fechaSalida}}</td>    
                <td class="border px-1 py-2 text-center">
                <a href="{{route('salida.edit',$salida->id)}}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('salida.destroy',$salida->id)}}"  method="POST">
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