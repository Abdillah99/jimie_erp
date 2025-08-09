<?php

use App\Modules\Catalog\Application\ProductService;
use App\Modules\Catalog\Infrastructure\ProductRepository;

require __DIR__ . '/../../vendor/autoload.php';

$repo = new ProductRepository();
$service = new ProductService($repo);
$service->create([
    'id' => '1',
    'name' => 'Demo Product',
    'sku' => 'DEM-001',
    'stock' => 10,
    'price' => 100,
]);

echo "Seeded demo product\n";
