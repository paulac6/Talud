<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('obra.store')}}" method="POST">
    @csrf
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre">
                        </div>
                        <div class="mb-4">
                            <label for="fechaInicio" class="block text-gray-700 text-sm font-bold mb-2">Fecha Inicio:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fechaInicio" name="fechaInicio">
                        </div>
                        <div class="mb-4">
                            <label for="fechaEntrega" class="block text-gray-700 text-sm font-bold mb-2">Fecha Entrega:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fechaEntrega" name="fechaEntrega">
                        </div>
                        <div class="mb-4">
                            <label for="cantidadMaterial" class="block text-gray-700 text-sm font-bold mb-2">Cantidad Material:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidadMaterial" name="cantidadMaterial">
                        </div>
                        <div class="mb-4">
                        <label for="tipo_id" class="block text-gray-700 text-sm font-bold mb-2">Tipo:</label>
                        <select name="tipo_id" id="" class="form-select">
            @foreach($tipos as $tipo)
        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
        @endforeach
            </select>
            <div class="mb-4">
                        <label for="cliente_id" class="block text-gray-700 text-sm font-bold mb-2">Cliente:</label>
                        <select name="cliente_id" id="" class="form-select">
            @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
        @endforeach
            </select>
            <div class="mb-4">
                        <label for="categoria_id" class="block text-gray-700 text-sm font-bold mb-2">Categoria:</label>
                        <select name="categoria_id" id="" class="form-select">
            @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach
            </select>
            <div class="mb-4">
                        <label for="usuario_id" class="block text-gray-700 text-sm font-bold mb-2">Usuario:</label>
                        <select name="usuario_id" id="" class="form-select">
            @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
            </select>
            </div>
                        <button type="submit">Enviar</button>
</form>
</html>