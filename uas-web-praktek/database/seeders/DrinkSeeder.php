<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drinks = [
            [
                'id_minuman' => 5,
                'nama_minuman' => 'Milkshake Strawberry',
                'keterangan' => 'Terbuat dari Strawberry asli dengan topi strawberry jam',
                'harga' => 15000,
                'foto_minuman' => 'milkshake-strawberry.jpg',
            ],
            [
                'id_minuman' => 6,
                'nama_minuman' => 'Es Cokelat',
                'keterangan' => 'Es Coklat yang kental terbuat dari dark colat yang dipadukan dengan susu cair',
                'harga' => 10000,
                'foto_minuman' => 'es-cokelat.jpg',
            ],
            [
                'id_minuman' => 7,
                'nama_minuman' => 'Jeruk Peras',
                'keterangan' => 'Jeruk yang manis tanpa campuran sari manis',
                'harga' => 7000,
                'foto_minuman' => 'jeruk-peras.jpg',
            ],
            [
                'id_minuman' => 8,
                'nama_minuman' => 'Green Tea',
                'keterangan' => 'Terbuat dari daun teh hijau asli dari jepang',
                'harga' => 12000,
                'foto_minuman' => 'green-tea.jpg',
            ],
        ];

        foreach ($drinks as $drink) {
            Drink::create([
                'id_minuman' => $drink['id_minuman'],
                'nama_minuman' => $drink['nama_minuman'],
                'keterangan' => $drink['keterangan'],
                'harga' => $drink['harga'],
                'foto_minuman' => $drink['foto_minuman'],
            ]);
        }
    }
}
