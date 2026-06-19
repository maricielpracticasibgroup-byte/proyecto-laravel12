@extends('layouts.app')

@section('content')

<h2 class="mb-3">📋 Lista de Productos</h2>

<a href="/productos/create" class="btn btn-success mb-3">
    Crear Producto
</a>

<table class="table table-bordered table-hover bg-white shadow">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>S/ {{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>

                <a href="/productos/{{ $producto->id }}/edit"
                   class="btn btn-warning btn-sm">
                    ✏ Editar
                </a>

                <form action="/productos/{{ $producto->id }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        🗑 Eliminar
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection