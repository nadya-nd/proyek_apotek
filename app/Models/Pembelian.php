<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelians'; // Nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_member',
        'tgl_pembelian',
        'total_harga_pembelian'
    ];

    public function detailPembelian()
    {
        return $this->hasMany(detailPembelian::class, 'id as id_pembelian');
    }

}
