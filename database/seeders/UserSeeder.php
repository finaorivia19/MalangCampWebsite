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

        $data = [
            [

                'name'=> 'Admin',
                'email'=> 'malangcamp@yahoo.com',
                'password'=> Hash::make('password'),
                'username'=> 'admin',
                'phoneNumber'=> '085646547053',
                'address'=> 'JL Ikan Lumba Lumba Residence Kav 9 Malang',
                'photo_profile'=> 'static/image/AdminLTELogo.png',
            ],
            [

                'name'=> 'Gofina April',
                'email'=> '5fina4@gmail.com',
                'password'=> Hash::make('password'),
                'username'=> 'gofina-april',
                'phoneNumber'=> '085646147053',
                'address'=> 'Bandung',
                'photo_profile'=> 'static/image/default_profile.png',
            ],
            [

                'name'=> 'Dina Isnaeni',
                'email'=> 'dina1snaeni@gmail.com',
                'password'=> Hash::make('password'),
                'username'=> 'dinaisnaeni',
                'phoneNumber'=> '085646547812',
                'address'=> 'Tepas',
                'photo_profile'=> 'static/image/default_profile.png',
            ],
        ];
        DB::table('users')->insert($data);

    }
}

