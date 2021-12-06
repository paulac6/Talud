<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('usuario.update',$usuario->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" value="{{@old('nombre', $usuario->nombre)}}">
                            @error('nombre')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="apellido" name="apellido" value="{{@old('apellido', $usuario->apellido)}}">
                            @error('apellido')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="telcelular" class="block text-gray-700 text-sm font-bold mb-2">Telefono:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telcelular" name="telcelular" value="{{@old('telcelular', $usuario->telcelular)}}">
                            @error('telcelular')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
                            <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="correo" name="correo" value="{{@old('correo', $usuario->correo)}}">
                            @error('correo')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="contraseña" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contraseña" name="contraseña" value="{{@old('contraseña', $usuario->contraseña)}}">
                            @error('contraseña')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-4">
                        <label for="rol_id" class="block text-gray-700 text-sm font-bold mb-2">Rol:</label>
                        <select name="rol_id" id="" class="form-select">
                        @foreach($roles as $role)
        <option value="{{$role->id}}" {{$role->id == $usuario->rol_id ? "selected" : ""}}>{{$role->nombre}}</option>
        @endforeach
            </select>
                        </div>
                        <button type="submit">Enviar</button>
                        </form>
                        </html>