<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('material.store')}}" method="POST">
    @csrf
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    <div class="form-group">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre">
                        </div>
                        <div class="mb-4">
                            <label for="peso" class="block text-gray-700 text-sm font-bold mb-2">Peso:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="peso" name="peso">
                        </div>
                        <div class="mb-4">
                            <label for="tamaño" class="block text-gray-700 text-sm font-bold mb-2">Tamaño:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tamaño" name="tamaño">
                        </div>
                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad" name="cantidad">
                        </div>
                        <div class="mb-4">
                            <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Situacion:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estado" name="situacion">
                        </div>
                        <div class="mb-4">
                        <label for="marca_id" class="block text-gray-700 text-sm font-bold mb-2">Marca:</label>
                        <select name="marca_id" id="" class="form-select">
            @foreach($marcas as $marca)
        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
        @endforeach
            </select>
                        </div>
                        <div class="mb-4">
                        <label for="proveedor_id" class="block text-gray-700 text-sm font-bold mb-2">Proveedor:</label>
                        <select name="proveedor_id" id="" class="form-select">
            @foreach($proveedores as $proveedo)
        <option value="{{$proveedo->id}}">{{$proveedo->nombre}}</option>
        @endforeach
            </select>
                        </div>
                        <button type="submit">Enviar</button>
</form>
</html>