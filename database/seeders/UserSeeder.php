<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'orangTuaId' => 1,
                'nama' => "Darmi",
                'email' => "darmi@gmail.com",
                'password' => "password",
                'role' => "user"
            ],[
                'orangTuaId' => 2,
                'nama' => "Sutomo",
                'email' => "sutomo@gmail.com",
                'password' => "password",
                'role' => "user"
            ]
        ];
        \DB::table('users')->insert($users);
    }
}
