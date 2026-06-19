@extends('layouts.app')

@section('content')

<h2 class="mb-3">➕ Crear Producto</h2>

<form action="/productos" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf

    <div class="mb-2">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control"></textarea>
    </div>

    <div class="mb-2">
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>

    <button class="btn btn-success">💾 Guardar</button>
    <a href="/productos" class="btn btn-secondary">Volver</a>

</form>

@endsection