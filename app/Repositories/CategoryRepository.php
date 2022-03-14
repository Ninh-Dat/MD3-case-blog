<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoryRepository extends BaseRepository
{
    public $table="categories";



    public function getModel()
    {
        return Categories::class;
    }
}