<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Gunakan kolom id dengan tipe unsigned integer sebagai primary key
            $table->string('nama_makanan');
            $table->text('keterangan');
            $table->integer('harga');
            $table->string('foto_makanan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
