<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetailBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail_barang_id',
        'transaksi_id',
    ];
}
