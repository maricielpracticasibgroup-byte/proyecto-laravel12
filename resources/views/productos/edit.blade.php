@extends('layouts.app')

@section('content')

<h2 class="mb-3">✏ Editar Producto</h2>

<form action="/productos/{{ $producto->id }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
    </div>

    <div class="mb-2">
        <label>Precio</label>
        <input type="number" name="precio" value="{{ $producto->precio }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="/productos" class="btn btn-secondary">Volver</a>
</form>

@endsection