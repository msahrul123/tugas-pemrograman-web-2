<?php

namespace Database\Seeders;

use App\Models\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembeli::create([
    'pembeli'    => 'Anugrah',
    'email'   => 'anugrah@example.com',
    'telepon' => '081234567890',
    'alamat'  => 'Jl. Perintis Kemerdekaan No. 10, Makassar',
]);
 Pembeli::create([
    'pembeli'    => 'Sahrul',
    'email'   => 'sahrul@example.com',
    'telepon' => '081234567891',
    'alamat'  => 'Jl. Perintis Kemerdekaan No. 11, Makassar',
]);
 Pembeli::create([
    'pembeli'    => 'Syafwan',
    'email'   => 'syafwan@example.com',
    'telepon' => '081234567892',
    'alamat'  => 'Jl. Perintis Kemerdekaan No. 12, Makassar',
]);
 Pembeli::create([
    'pembeli'    => 'Ubaid',
    'email'   => 'ubaid@example.com',
    'telepon' => '081234567893',
    'alamat'  => 'Jl. Perintis Kemerdekaan No. 13, Makassar',
]);

    }
}
