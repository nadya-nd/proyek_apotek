<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    
    protected $table = 'obats'; // Nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_obat'
    ];

    public function detailObat()
    {
        return $this->hasMany(detailObat::class, 'id as id_obat');
    }

}

