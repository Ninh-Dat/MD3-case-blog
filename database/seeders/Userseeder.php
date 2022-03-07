<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin1";
        $user->email = "admin1@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = "0987654321";
        $user->save();

        $user = new User();
        $user->name = "Ninh Đạt";
        $user->email = "dat@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = "0987654321";
        $user->save();

        $user = new User();
        $user->name = "Ninh Huỳnh";
        $user->email = "huynh@gmail.com";
        $user->password = Hash::make('123123');
        $user->phone = "0987654321";
        $user->save();

    }
}
