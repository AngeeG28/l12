@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Inventario de Libros</h1>


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
                        <a href="<?= ('detalle/' . $p->sku) ?>" class="btn btn-sm btn-primary" style="aling-content:center">Ver</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
@endsection