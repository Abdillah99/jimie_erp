<?php

use App\Modules\Catalog\Infrastructure\ProductRepository;
use App\Modules\Catalog\Application\ProductService;
use App\Modules\Catalog\Presentation\Controllers\ProductController;

$repo = new ProductRepository();
$service = new ProductService($repo);
$controller = new ProductController($service);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/api/products') {
    header('Content-Type: application/json');
    echo json_encode($controller->index());
    return;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/api/products') {
    $payload = json_decode(file_get_contents('php://input'), true);
    $result = $controller->store($payload);
    header('Content-Type: application/json');
    echo json_encode($result);
    return;
}

http_response_code(404);
