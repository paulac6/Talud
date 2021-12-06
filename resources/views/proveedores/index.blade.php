<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'proveedores'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Proveedores</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">NOMBRE</th>
                <th class="px-1 py-2">APELLIDO</th>
                <th class="px-1 py-2">TIPO DOC</th>
                <th class="px-1 py-2">NUMERO DOC</th>
                <th class="px-1 py-2">TELEFONO</th>
                <th class="px-2 py-2">CORREO</th>
                <th class="px-1 py-2">ESTADO</th>
                <th class="px-1 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedore)
            <tr>
                <td class="border px-1 py-2">{{$proveedore->id}}</td>
                <td class="border px-1 py-2">{{$proveedore->nombre}}</td>
                <td class="border px-1 py-2">{{$proveedore->apellido}}</td>
                <td class="border px-1 py-2">{{$proveedore->tipodoc}}</td>
                <td class="border px-1 py-2">{{$proveedore->numerodoc}}</td>
                <td class="border px-1 py-2">{{$proveedore->telcelular}}</td>
                <td class="border px-1 py-2">{{$proveedore->correo}}</td>
                <td class="border px-1 py-2">{{$proveedore->estado}}</td>
                <td class="border px-1 py-2 text-center">
                <a href="{{route('proveedore.edit',$proveedore->id)}}"
                        class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('proveedore.destroy',$proveedore->id)}}"  method="POST">
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