<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = [[
            'nom' => 'Oulaarbi',
            'prenom' => 'Ayoub',
            'email' => 'ayoub@gmail.com',
            'role' => 'gérant',
            'phone' => '+21299999999',
            'password' => Hash::make('ayoub'),
        ],
        [
            'nom' => 'shakur',
            'prenom' => 'tupac',
            'email' => 'tupac@gmail.com',
            'role' => 'vendeur',
            'phone' => '+1999999999',
            'password' => Hash::make('tupac'),
        ],
        [
            'nom' => 'Mathers',
            'prenom' => 'Marshall',
            'email' => 'eminem@gmail.com',
            'role' => 'caissier',
            'phone' => '+166666666666',
            'password' => Hash::make('eminem'),
        ]
        ];
        \App\Models\User::insert($data);
    }
}
