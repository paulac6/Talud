<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'roles'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Roles</h2>
										</div>
                                        <a href="{{route('role.create')}}">
						<span>Registrar</span>
						</a>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-9 py-2">ID</th>
                <th class="px-9 py-2">NOMBRE</th>
                <th class="px-9 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td class="border px-1 py-2">{{$role->id}}</td>
                <td class="border px-1 py-2">{{$role->nombre}}</td>
                <td class="border px-1 py-2 text-center">
                <a href="{{route('role.edit',$role->id)}}"
                        class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('role.destroy',$role->id)}}"  method="POST">
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