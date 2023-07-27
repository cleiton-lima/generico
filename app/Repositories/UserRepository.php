<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends CrudRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    // Métodos específicos do UserRepository podem ser adicionados aqui
}
