<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian'; // Nama tabel di database

    protected $fillable = [
        'id_pembelian',
        'id_member',
        'tgl_pembelian',
        'total_harga_pembelian'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_member');
    }


}
