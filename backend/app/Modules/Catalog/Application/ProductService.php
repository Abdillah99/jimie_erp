<?php

namespace App\Modules\Catalog\Application;

use App\Modules\Catalog\Domain\Entity\Product;
use App\Modules\Catalog\Infrastructure\ProductRepository;

class ProductService
{
    public function __construct(private ProductRepository $repo) {}

    public function create(array $data): Product
    {
        $product = new Product(
            id: $data['id'],
            name: $data['name'],
            sku: $data['sku'],
            stock: $data['stock'] ?? 0,
            price: $data['price'] ?? 0.0
        );
        $this->repo->save($product);
        return $product;
    }

    /** @return Product[] */
    public function list(): array
    {
        return $this->repo->all();
    }
}
