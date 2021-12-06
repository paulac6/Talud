<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
@extends('layouts.main',['active'=>'entrada'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Entrada</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">FECHA ENTRADA</th>
                <th class="px-1 py-2">PROVEEDOR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entrada as $entrad)
            <tr>
                <td class="border px-1 py-2">{{$entrad->id}}</td>
                <td class="border px-1 py-2">{{$entrad->fechaEntrada}}</td>
                <td class="border px-1 py-2">{{$entrad->proveedor->nombre}}</td>
               
</tr>
@endforeach
</tbody>
    </table>
        </div>
    </div> 
</div>
</html>
@endsection