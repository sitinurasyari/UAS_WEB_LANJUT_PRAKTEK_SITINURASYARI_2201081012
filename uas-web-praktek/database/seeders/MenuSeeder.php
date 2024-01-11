<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'id_makanan' => 5,
                'nama_makanan' => 'Pecel Ayam',
                'keterangan' => 'Pecel Ayam dengan Sambal terasi dan lalapan Timun',
                'harga' => 18000,
                'foto_makanan' => 'pecel-ayam.jpg',
            ],
            [
                'id_makanan' => 6,
                'nama_makanan' => 'Mie Rebus',
                'keterangan' => 'Mie Rebus dengan toping telur dengan cita rasa rumahan',
                'harga' => 12000,
                'foto_makanan' => 'mie-rebus.jpg',
            ],
            [
                'id_makanan' => 7,
                'nama_makanan' => 'Bakso',
                'keterangan' => 'Bakso yang dilengkapi dengan mie dan Telur',
                'harga' => 20000,
                'foto_makanan' => 'bakso.jpg',
            ],
            [
                'id_makanan' => 8,
                'nama_makanan' => 'Mie Ayam',
                'keterangan' => 'Mie Ayam dengan toping yang berlimpah dan kerupuk pangsit',
                'harga' => 18000,
                'foto_makanan' => 'mie-ayam.jpg',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create([
                'id_makanan' => $menu['id_makanan'],
                'nama_makanan' => $menu['nama_makanan'],
                'keterangan' => $menu['keterangan'],
                'harga' => $menu['harga'],
                'foto_makanan' => $menu['foto_makanan'],
            ]);
        }
    }
}
