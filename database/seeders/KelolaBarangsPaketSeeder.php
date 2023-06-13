<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelolaBarangsPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_item'=> 28,
                'paket_id'=> 1,
            ],
            [
                'id_item'=> 29,
                'paket_id'=> 1,
            ],
            [
                'id_item'=> 30,
                'paket_id'=> 1,
            ],
            [
                'id_item'=> 31,
                'paket_id'=> 1,
            ],
            [
                'id_item'=> 32,
                'paket_id'=> 2,
            ],
            [
                'id_item'=> 33,
                'paket_id'=> 2,
            ],
            [
                'id_item'=> 34,
                'paket_id'=> 2,
            ],
            [
                'id_item'=> 35,
                'paket_id'=> 2,
            ],
            [
                'id_item'=> 36,
                'paket_id'=> 2,
            ]
            ];
        DB::table('kelola_barangs_paket')->insert($data);
    }
}
