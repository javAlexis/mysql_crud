<?php
/**
 * Products Index View
 */
$this->title('Catálogo de Productos');
?>

<div class="row">
    <div class="col-md-12">
        <h2 class="mb-4">Catálogo de Electrónica</h2>
    </div>
</div>

<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <!-- Placeholder Image -->
                <img src="https://via.placeholder.com/300x200?text=<?= h($product->Name) ?>" class="card-img-top"
                    alt="<?= h($product->Name) ?>">

                <div class="card-body">
                    <h5 class="card-title">
                        <?= h($product->Name) ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?= h($product->Sku) ?>
                    </h6>
                    <p class="card-text text-truncate">
                        <?= h($product->Description) ?>
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="h5 text-primary mb-0">$
                            <?= number_format($product->Price, 2) ?>
                        </span>
                        <button class="btn btn-sm btn-outline-primary">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if (count($products) == 0): ?>
        <div class="col-12">
            <div class="alert alert-info">
                No hay productos registrados aún. Asegúrate de ejecutar el script <code>db.sql</code> en tu base de datos.
            </div>
        </div>
    <?php endif; ?>
</div>