<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'marcas'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Marcas</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
            </thead>
        <tbody>
            @foreach($marcas as $marca)
            <tr>
                <td class="border px-4 py-2">{{$marca->id}}</td>
                <td class="border px-4 py-2">{{$marca->nombre}}</td>
                <td class="border px-4 py-2 text-center">
                <a href="{{route('marca.edit',$marca->id)}}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('marca.destroy',$marca->id)}}"  method="POST">
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