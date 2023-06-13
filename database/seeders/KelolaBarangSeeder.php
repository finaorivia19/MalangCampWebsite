<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KelolaBarang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KelolaBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KelolaBarang::truncate();

        $data = [
            [
                'id_item' => 1,
                'nama_item' => 'Tenda Mini',
                'stok' => 10,
                'jenis' => 'Tenda',
                'keterangan' => 'Tenda berukuran 2x2 meter, kapasitas 2 orang',
                'harga' => 10000,
                'gambar' => 'gambar',
            ],
            [
                'id_item' => 2,
                'nama_item' => 'Tenda Max',
                'stok' => 10,
                'jenis' => 'Tenda',
                'keterangan' => 'Tenda berukuran 10x2 meter, kapasitas 10 orang',
                'harga' => 20000,
                'gambar' => $namaFile,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Menambahkan data ke tabel kelola_barangs
        KelolaBarang::insert($data);
    }
}
