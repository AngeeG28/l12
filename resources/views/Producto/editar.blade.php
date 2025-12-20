@extends('layouts.app')
@section('content')


<!-- BODY DE EDITAR PRODUCTO -->

<div class="container mt-4">

      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif

    <h2 class="text-center mb-4">Editar Libro</h2>

    <form action="{{ route('productos.update', $producto->sku) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Libro</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $producto->autor }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Precio</label>
            <input type="number" class="form-control" id="valor" name="valor" value="{{ $producto->valor }}" required>
        </div>
         <br>
         <div>
            <button type="submit" class="btn btn-primary">Actualizar Libro</button>
            <a href="{{ route('productos.index', $producto->sku) }}" class="btn btn-secondary">Regresar</a>
         </div>
        <br><br>
    </form>
@endsection

  
