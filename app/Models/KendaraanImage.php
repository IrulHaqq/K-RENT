<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanImage extends Model
{
    use HasFactory;

    protected $fillable = ['kendaraan_id', 'image_path'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
