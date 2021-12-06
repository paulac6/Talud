<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
<form action="{{route('entrada.store')}}" method="POST">
    @csrf
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="cantidadMaterial" class="block text-gray-700 text-sm font-bold mb-2">Cantidad Material:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidadMaterial" name="cantidadMaterial" value="{{@old('cantidadMaterial', $entradam->cantidadMaterial)}}">
                        </div>
                        <div class="mb-4">
                            <label for="observacion" class="block text-gray-700 text-sm font-bold mb-2">Observacion:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="observacion" name="observacion" value="{{@old('observacion', $entradam->observacion)}}">
                        </div>
                        <div class="mb-4">
                        <label for="material_id" class="block text-gray-700 text-sm font-bold mb-2">Material:</label>
                        <select name="material_id" id="" class="form-select">
            @foreach($materials as $material)
        <option value="{{$material->id}}">{{$material->nombre}}</option>
        @endforeach
            </select>
                        </div>
                        <div class="mb-4">
                        <label for="entrada_id" class="block text-gray-700 text-sm font-bold mb-2">Entrada:</label>
                        <select name="entrada_id" id="" class="form-select">
            @foreach($entrada as $entrad)
        <option value="{{$entrad->id}}">{{$entrad->fechaEntrada}}</option>
        @endforeach
            </select>
                        </div>
                        <button type="submit">Enviar</button>
</form>
</html>