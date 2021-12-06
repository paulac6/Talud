@extends('layouts.main',['active'=>'clientes'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Clientes</h2>
										</div>
                                        <a href="{{route('cliente.create')}}">
						<span>Registrar</span>
						</a>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">NOMBRE</th>
                <th class="px-1 py-2">CORREO</th>
                <th class="px-1 py-2">TELEFONO</th>
                <th class="px-1 py-2">DIRECCION</th>
                <th class="px-1 py-2">ESTADO</th>
                <th class="px-1 py-2">EDITAR</th>
                <th class="px-1 py-2">ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td class="border px-1 py-2">{{$cliente->id}}</td>
                <td class="border px-1 py-2">{{$cliente->nombre}}</td>
                <td class="border px-1 py-2">{{$cliente->correo}}</td>
                <td class="border px-1 py-2">{{$cliente->telefono}}</td>
                <td class="border px-1 py-2">{{$cliente->direccion}}</td>
                <td class="border px-1 py-2">{{$cliente->estado}}</td>
                <td class="border px-1 py-2 text-center">
                <a href="{{route('cliente.edit',$cliente->id)}}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a></td>

                        <td class="border px-1 py-2 text-center">
                        <form action="{{route('cliente.destroy',$cliente->id)}}"  method="POST">
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