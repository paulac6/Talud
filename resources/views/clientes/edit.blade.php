<!DOCTYPE html>
<html>
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('cliente.update',$cliente->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" value="{{@old('nombre', $cliente->nombre)}}">
                            @error('nombre')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                            <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="correo" name="correo" value="{{@old('correo', $cliente->correo)}}">
                            @error('correo')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Telefono:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefono" name="telefono" value="{{@old('telefono', $cliente->telefono)}}">
                            @error('telefono')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Direccion:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="direccion" name="direccion" value="{{@old('direccion', $cliente->direccion)}}">
                            @error('direccion')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <button type="submit">Enviar</button>
</form>
</html>