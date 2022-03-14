<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseInterface;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository implements BaseInterface
{


    public $model;

    public function __construct()
    {
        $this->model = $this->getModel();

    }

    public abstract function getModel();

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail();
    }


    public function deleteById($id)
    {
        return $this->model->destroy($id);
    }

}