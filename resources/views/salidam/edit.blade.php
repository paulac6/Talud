<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('salida.update',$salidam->id)}}" method="POST">
@method('put')
    @csrf
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="tipo_id" class="block text-gray-700 text-sm font-bold mb-2">Tipo:</label>
                        <select name="tipo_id" id="" class="form-select">
            @foreach($tipos as $tipo)
        <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
        @endforeach
            </select>
                        </div>
                        <div class="mb-4">
                            <label for="cantidadMaterial" class="block text-gray-700 text-sm font-bold mb-2">Cantidad Material:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidadMaterial" name="cantidadMaterial" value="{{@old('cantidadMaterial', $salidam->cantidadMaterial)}}">
                        </div>
                        <div class="mb-4">
                        <label for="salida_id" class="block text-gray-700 text-sm font-bold mb-2">Salida:</label>
                        <select name="salida_id" id="" class="form-select">
            @foreach($salida as $salid)
        <option value="{{$salid->id}}">{{$salid->fechaSalida}}</option>
        @endforeach
            </select>
                        </div>
                        <button type="submit">Enviar</button>
</form>
</html>