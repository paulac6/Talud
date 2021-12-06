<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
@extends('layouts.main',['active'=>'usuarios'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Usuarios</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="wd-15p">ID</th>
															<th class="wd-15p">NOMBRE</th>
															<th class="wd-15p">APELLIDO</th>
															<th class="wd-20p">TELEFONO</th>
															<th class="wd-15p">CORREO</th>
															<th class="wd-10p">ESTADO</th>
															<th class="wd-25p">ROL</th>
                                                            <th class="wd-25p">ACCIONES</th>
														</tr>
													</thead>
                                                    <tbody>
                                                    @foreach($usuarios as $usuario)
            <tr>
													<td class="border px-1 py-2">{{$usuario->id}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->nombre}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->apellido}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->telcelular}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->correo}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->estado}}</td>
                                                    <td class="border px-1 py-2">{{$usuario->rol->nombre}}</td>
                                                    <td class="border px-1 py-2 text-center">
                <a href="{{route('usuario.edit',$usuario->id)}}"
                        class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4" 
                        type="submit">Editar</a>

                        <form action="{{route('usuario.destroy',$usuario->id)}}"  method="POST">
                            @method('delete')
                            @csrf
                    <button class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4" 
                        type="submit">Eliminar</button>
</form>
                </td>
                                                    
                </td>
            </tr>
            @endforeach
        </tbody>
												</table>
											</div>
										</div>
									</div>							
								</div>
							</div>
@endsection