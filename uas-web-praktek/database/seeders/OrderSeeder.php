<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Drink;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Ambil beberapa data menu dan minuman yang sudah ada
        $menu = Menu::where('id_makanan', 'a12312')->first();
        $drink = Drink::where('id_minuman', 'a12323')->first();

        // Buat beberapa order dengan menggunakan data menu dan minuman yang sudah ada
        Order::create([
            'id_pelanggan' => 'p12345',
            'nama_pelanggan' => 'John Doe',
            'menu_makanan' => $menu->id_makanan, // Use the correct foreign key column name
            'menu_minuman' => $drink->id_minuman, // Use the correct foreign key column name
        ]);

        // Tambahkan order lain jika diperlukan
    }
}
