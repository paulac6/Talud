<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('proveedore.store')}}" method="POST">
    @csrf
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">    
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" value="{{@old('nombre', $proveedore->nombre)}}">
                            @error('nombre')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apellido" name="apellido" value="{{@old('apellido', $proveedore->apellido)}}">
                            @error('apellido')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="tipodoc" class="block text-gray-700 text-sm font-bold mb-2">Tipo Doc:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tipodoc" name="tipodoc" value="{{@old('tipodoc', $proveedore->tipodoc)}}">
                            @error('tipodoc')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="numerodoc" class="block text-gray-700 text-sm font-bold mb-2">Numero Doc:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numerodoc" name="numerodoc" value="{{@old('numerodoc', $proveedore->numerodoc)}}">
                            @error('numerodoc')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="telcelular" class="block text-gray-700 text-sm font-bold mb-2">Telefono:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telcelular" name="telcelular" value="{{@old('telcelular', $proveedore->telcelular)}}">
                            @error('telcelular')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                            <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="correo" name="correo" value="{{@old('correo', $proveedore->correo)}}">
                            @error('correo')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        </div>
            </div>
                        <button type="submit">Enviar</button>
</form>
</html>