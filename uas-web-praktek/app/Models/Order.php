<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id_pelanggan', 'nama_pelanggan', 'menu_makanan', 'menu_minuman'];
    
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_makanan');
    }

    public function drink()
    {
        return $this->belongsTo(Drink::class, 'menu_minuman');
    }
}
