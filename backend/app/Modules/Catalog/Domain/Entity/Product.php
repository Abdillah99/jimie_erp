<?php

namespace App\Modules\Catalog\Domain\Entity;

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public string $sku,
        public int $stock = 0,
        public float $price = 0,
    ) {}
}
