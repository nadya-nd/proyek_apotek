<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members'; // Nama tabel di database
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id',
        'nama',
        'no_telepon',
        'alamat',
        'status',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id as id');
    }
}
