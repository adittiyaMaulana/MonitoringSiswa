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
                'nama' => "Darmi",
                'email' => "darmi@gmail.com",
                'password' => "password",
                'role' => "user"
            ],[
                'nama' => "Sutomo",
                'email' => "sutomo@gmail.com",
                'password' => "password",
                'role' => "user"
            ]
        ];
        \DB::table('users')->insert($users);
    }
}
