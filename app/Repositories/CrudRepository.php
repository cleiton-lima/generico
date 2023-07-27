<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class CrudRepository extends BaseRepository
{
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Model $model, array $data)
    {
        $model->update($data);
        return $model;
    }

    public function delete(Model $model)
    {
        $model->delete();
    }

    // Outros métodos CRUD podem ser adicionados aqui
}
