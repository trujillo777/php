@extends('layout.app')

@section('titulo')
Registrar Usuario
@endsection

@section('contenido')
<div class="flex justify-start">
    <div class="w-96 flex justify-start">
        <form method="post" class="w-96 flex flex-col p-3 bg-gray-100 rounded-md shadow-md">
            @csrf
            <label class="p-3 text-gray-800" for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="border border-gray-300 p-2 rounded-md" required>
            @error('name')
                <p class="bg-red-200 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="identification">Identificación:</label>
            <input type="text" id="identification" name="identification" class="border border-gray-300 p-2 rounded-md" required>
            @error('identification')
                <p class="bg-red-200 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" class="border border-gray-300 p-2 rounded-md" required>
            @error('phone')
                <p class="bg-red-200 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="address">Dirección:</label>
            <input type="text" id="address" name="address" class="border border-gray-300 p-2 rounded-md" required>
            @error('address')
                <p class="bg-red-200 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <button type="submit" class="mt-10 p-3 bg-gray-700 hover:bg-gray-500 text-white py-2 px-4 rounded-md">Registrar</button>
        </form>
    </div>
</div>





@endsection
