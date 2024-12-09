<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPemeliharaanBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pemeliharaan',
        'deskripsi',
        'detail_barang_id',
    ];
}
