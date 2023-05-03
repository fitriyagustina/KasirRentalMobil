<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = "Kendaraan";
    protected $fillable =['nama_kendaraan','plat_nomer','merek','warna','harga','jaminan_sewa'];
}
