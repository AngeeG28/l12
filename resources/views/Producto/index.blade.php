@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-center mb-4">Inventario de Libros</h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoLibro">AGREGAR LIBRO</button>
                
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- CREACION TABLA -->
        <table class="table table-striped table-hover mt-3">
            <thead class="table" style="background-color: #0280b6ff; color: white">
                <tr>
                    <th>SKU</th>
                    <th>Nombre del Libro</th>
                    <th>Autor</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p->sku; ?></td>
                    <td><?= $p->nombre; ?></td> 
                    <td><?= $p->autor; ?></td>               
                    <td><?= $p->stock; ?></td>
                    <td>$<?= number_format($p->valor, 0, ",", "."); ?></td>
                    <td>
                        <a href="<?= ('productos/' . $p->sku) ?>" class="btn btn-sm btn-primary" style="aling-content:center">Ver</a>
                    <!-- BOTÓN ELIMINAR -->
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $p->sku }}">Eliminar</button>

                    <!-- MODAL ELIMINAR -->
                    <div class="modal" id="modalEliminar{{ $p->sku }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Eliminar Libro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Estás seguro de eliminar el libro "<strong><?= $p->nombre ?></strong>"?</p><br>
                                <small class="text-muted">SKU: {{ $p->sku }}</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <form action="{{ route('productos.destroy', $p->sku) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- BOTÓN EDITAR -->
                        <a href="{{ route('productos.edit', $p->sku) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                

                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- BOTONES DE PAGINACIÓN -->
         <div class="d-flex justify-content-center mt-4">
        {{ $productos->links() }}
        </div>

        <!-- DISEÑO DE MODAL -->

        <div class="modal" id="modalNuevoLibro" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf

                    <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre del libro</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Autor</label>
                            <input type="text" name="autor" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Valor (Precio)</label>
                            <input type="number" name="valor" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar libro</button>
                </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection