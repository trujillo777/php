@extends('layout.app')

@section('titulo')
Listar Usuarios
@endsection

@section('contenido')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<div class="flex flex-col items-start w-full">
    <a href="/registrar" class="mb-4 ml-2">
        <button class="bg-gray-500 hover:bg-gray-300 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-user-plus"></i> Registrar nuevo usuario
        </button>
    </a>
    <div class="w-full lg:w-96 mx-auto">
        <table class="min-w-full bg-white border rounded-md shadow-md overflow-hidden">
            <thead class="bg-gray-500 text-white">
                <tr>
                    <th class="py-2 px-4 border">Nombre</th>
                    <th class="py-2 px-4 border">Identificación</th>
                    <th class="py-2 px-4 border">Teléfono</th>
                    <th class="py-2 px-4 border">Dirección</th>
                    <th class="py-2 px-4 border">Actualizar</th>
                    <th class="py-2 px-4 border">Eliminar</th>
                    <th class="py-2 px-4 border">PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $data)
                <tr class="border-t hover:bg-gray-50">
                    <td class="py-2 px-4 border">{{ $data->name }}</td>
                    <td class="py-2 px-4 border">{{ $data->identification }}</td>
                    <td class="py-2 px-4 border">{{ $data->phone }}</td>
                    <td class="py-2 px-4 border">{{ $data->address }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('actualizar', $data->id) }}">
                            <i class="fas fa-edit text-gray-500"></i>
                        </a>
                    </td>
                    <td class="py-2 px-4 border">
                        <form action="{{ route('eliminar', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">
                                <i class="fas fa-trash text-gray-500"></i>
                            </button>
                        </form>
                    </td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('descargar.pdf', $data->id) }}" target="_blank">
                            <i class="fas fa-file-pdf text-gray-500"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
