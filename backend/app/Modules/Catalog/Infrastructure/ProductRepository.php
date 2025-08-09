<?php

namespace App\Modules\Catalog\Infrastructure;

use App\Modules\Catalog\Domain\Entity\Product;

class ProductRepository
{
    /** @var array<string, Product> */
    private array $items = [];

    public function save(Product $product): void
    {
        $this->items[$product->id] = $product;
    }

    public function find(string $id): ?Product
    {
        return $this->items[$id] ?? null;
    }

    /** @return Product[] */
    public function all(): array
    {
        return array_values($this->items);
    }
}
