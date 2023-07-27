<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Product;

class Repository
{
    public static function forUser()
    {
        return new UserRepository(new User());
    }

    public static function forProduct()
    {
        return new ProductRepository(new Product());
    }
}
