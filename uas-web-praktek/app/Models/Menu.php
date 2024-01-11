<?php

// app/Models/Menu.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['id_makanan', 'nama_makanan', 'keterangan', 'harga', 'foto_makanan'];
    protected $primaryKey = 'id_makanan';
    // Relasi dengan Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'nama_makanan', 'nama_makanan');
    }
}

