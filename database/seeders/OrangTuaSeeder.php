<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orang_tua = [
            [
                'nama' => "Darmi",
                'ttl' => "1980/07/13",
                'alamat' => "Jl. Cendrawasih"
            ],[
                'nama' => "Sutomo",
                'ttl' => "1980/07/13",
                'alamat' => "Jl. Merak"
            ]
        ];
        \DB::table('orang_tua')->insert($orang_tua);
    }
}