<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
//         \App\Models\User::factory(10)->create();
       $this->call(RoleSeeder::class);
        $this->call(Userseeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(BlogModelSeeder::class);
    }
}

