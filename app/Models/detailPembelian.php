<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPembelian extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'detail_pembelian'; // Nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_pembelian',
        'tgl_pembelian',
        'estimasi_obat_habis',
        'subtotal_harga'
    ];

    public function detailObat()
    {
        return $this->hasMany(detailObat::class, 'id as id_detail_pembelian');
    }

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'id_pembelian as id');
    }
}
