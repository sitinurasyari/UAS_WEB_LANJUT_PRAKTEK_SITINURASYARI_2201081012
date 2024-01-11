<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id(); // Gunakan kolom id dengan tipe unsigned integer sebagai primary key
            $table->string('nama_minuman');
            $table->text('keterangan');
            $table->integer('harga');
            $table->string('foto_minuman');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
