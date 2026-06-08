<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Administracion de productos</h2>
    <div>
        <a href="index.php?route=productos/create class" class="btn btn-success">Nuevo producto</a>
        <a href="index.php?route=logout" class="btn btn-danger">Cerrar sesion</a>
    </div>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>SKU</th>
            <th>Nombre</th>
            <th>Precio compra</th>
            <th>Precio venta</th>
            <th>Existencia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= (int)$producto['id']; ?></td>
                <td><?= htmlspecialchars($producto['sku']); ?></td>
                <td><?= htmlspecialchars($producto['nombre']); ?></td>
                <td><?= number_format ((float)$producto['precio_compra'], 2); ?></td>
                <td><?= number_format ((float)$producto['precio_venta'], 2); ?></td>
                <td><?= (int)$producto['existencia']; ?></td>
            </tr>
    </tbody>
</table>