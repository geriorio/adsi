<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'harga_sewa',
        'stock',
        'foto_url',
    ];

    public static function addStock($idBarang, $qty)
    {
        $barang = self::find($idBarang);
        $barang->stock += $qty;
        $barang->save();

        return $barang;
    }

    public static function subtractStock($idBarang, $qty)
    {
        $barang = self::find($idBarang);
        $barang->stock -= $qty;
        $barang->save();

        return $barang;
    }
}
