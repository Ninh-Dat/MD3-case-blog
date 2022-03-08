<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= new Categories();
        $category->name = "Aaaa";
        $category->description = "aaa";
        $category->save();

        $category= new Categories();

        $category->name = "Bbbb";
        $category->description = "bbb";
        $category->save();

        $category= new Categories();

        $category->name = "Cccc";
        $category->description = "ccc";
        $category->save();
    }
}
