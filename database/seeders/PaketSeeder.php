<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
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
                'nama_paket'=>'Hemat A',
                'image_paket'=>'static/image/paketTenda.jpg'
            ],
            [
                'nama_paket'=>'Hemat B',
                'image_paket'=>'static/image/paketTenda.jpg'
            ],
            [
                'nama_paket'=>'Hemat C',
                'image_paket'=>'static/image/paketTenda.jpg'
            ]
        ];
        DB::table('paket')->insert($data);
    }
}
