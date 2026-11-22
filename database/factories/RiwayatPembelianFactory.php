<?php

namespace Database\Factories;

use App\Models\Pembeli;
use App\Models\RiwayatPembelian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RiwayatPembelian>
 */
class RiwayatPembelianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'pembeli_id' => Pembeli::inRandomOrder()->first()->id,
            'judul_game' => fake()->sentence(3),
            'jenis' => fake()->randomElement(['Top Up', 'Skin', 'Battle Pass', 'Item']),
            'tanggal' => fake()->dateTimeBetween('-1 year', 'now'),
            'total_bayar' => fake()->numberBetween(10000, 1000000),
            'metode' => fake()->randomElement(['QRIS', 'Transfer Bank', 'E-Wallet']),
            'status' => fake()->randomElement(['pending', 'lunas', 'gagal']),
        ];
    }
}
