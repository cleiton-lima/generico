<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Repositories\Repository;

class UserController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();
        $user = Repository::forUser()->create($data);
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user = Repository::forUser()->update($user, $data);
        return new UserResource($user);
    }

    // Outros métodos do controller podem ser adicionados aqui
}
