<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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


        Petugas::create([
            'nama_petugas' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '0812345678',
            'level' => 'admin',
        ]);
    }
}
