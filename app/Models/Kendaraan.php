<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tipe_Kendaraan',
        'Nama_Kendaraan',
        'Harga_Kendaraan',
        'Jumlah_Kendaraan',
        'Deskripsi_Kendaraan'
    ];

    protected $casts = [
        'created_at'=>'datetime',
        'updated_at'=>'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(KendaraanImage::class);
    }
}
