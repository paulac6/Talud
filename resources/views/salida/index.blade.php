<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
@extends('layouts.main',['active'=>'salida'])
@section('content')
<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Salida</h2>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
													<thead>
														<tr>
                                                        <th class="px-1 py-2">ID</th>
                <th class="px-1 py-2">FECHA SALIDA</th>
                <th class="px-1 py-2">OBRA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salida as $salid)
            <tr>
                <td class="border px-1 py-2">{{$salid->id}}</td>
                <td class="border px-1 py-2">{{$salid->fechaSalida}}</td>
                <td class="border px-1 py-2">{{$salid->obra->nombre}}</td>
               
</tr>
@endforeach
</tbody>
    </table>
        </div>
    </div> 
</div>
</html>
@endsection