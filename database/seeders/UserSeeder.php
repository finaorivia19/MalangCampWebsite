<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('password')
        ]);

        // $data = 
        //     [
               
        //         'nama'=>'Aslan Bahri',
        //         'email'=>'abe31hari@gmail.com',
        //         'password' =>Hash::make('password')
              
        //     ];
        //     [
               
        //         'nama'=>'Candra Dirajat',
        //         'email'=>'moonsoonata@gmail.com',
        //         'password' =>Hash::make('password')
        //     ],
        //     [
               
        //         'nama'=>'Edi Filayas',
        //         'email'=>'Edi3Filayas@gmail.com',
        //         'password' =>Hash::make('password')
        //     ]
        // ];
        // DB::table('users')->insert($data);
    
    }
}

