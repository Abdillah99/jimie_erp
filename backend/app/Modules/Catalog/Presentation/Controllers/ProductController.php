<?php

namespace App\Modules\Catalog\Presentation\Controllers;

use App\Modules\Catalog\Application\ProductService;

class ProductController
{
    public function __construct(private ProductService $service) {}

    public function index(): array
    {
        return $this->service->list();
    }

    public function store(array $data): array
    {
        $product = $this->service->create($data);
        return ['id' => $product->id];
    }
}
