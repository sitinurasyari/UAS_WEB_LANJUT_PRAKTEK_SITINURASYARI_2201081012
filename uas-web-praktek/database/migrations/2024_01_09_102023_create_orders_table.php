<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_pelanggan');
            $table->string('nama_pelanggan');

            // Foreign key for menu_makanan
            $table->foreignId('menu_makanan')
                ->constrained('menus', 'id_makanan') // Sesuaikan dengan nama kolom kunci utama di tabel 'menus'
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Foreign key for menu_minuman
            $table->foreignId('menu_minuman')
                ->constrained('drinks', 'id_minuman') // Sesuaikan dengan nama kolom kunci utama di tabel 'drinks'
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
