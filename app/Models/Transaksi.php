<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_sewa',
        'tanggal_kembali',
        'total_biaya',
        'metode_pembayaran',
        'status',
        'pengiriman_id',
        'penyewa_id',
    ];
}
