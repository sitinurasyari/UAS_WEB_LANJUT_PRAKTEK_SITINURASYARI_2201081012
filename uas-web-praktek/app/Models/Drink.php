<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = ['id_minuman', 'nama_minuman', 'keterangan', 'harga', 'foto_minuman'];

    protected $primaryKey = 'id_minuman';
    // Relasi dengan Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'nama_minuman', 'nama_minuman');
    }
}

