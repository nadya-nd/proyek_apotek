<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailObat extends Model
{
    use HasFactory;
    protected $table = 'detail_obat'; // Nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_member',
        'id_obat',
        'id_pembelian',
        'id_detail_pembelian',
        'id',

    ];

    public function detailPembelian()
    {
        return $this->belongsTo(detailPembelian::class, 'id_detail_pembelian as id');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat as id');
    }

    
}
