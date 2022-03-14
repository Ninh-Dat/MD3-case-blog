<?php

namespace App\Repositories;

use App\Models\Blog;

class BlogRepository extends BaseRepository
{
    public $table = "blogs";

    public function getModel()
    {
        return Blog::class;
    }


}