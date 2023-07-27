<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends CrudRepository
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    // Métodos específicos do ProductRepository podem ser adicionados aqui
}
