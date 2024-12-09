<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'nama',
        'status',
    ];

    public static function setStatusSewa($idBarang, $quantity)
    {
        $listDetailBarang = self::where('barang_id', $idBarang)
            ->where('status', 'available')
            ->limit($quantity)
            ->get();

        foreach ($listDetailBarang as $item) {
            $item->status = 'disewakan';
            $item->save();
        }

        return $listDetailBarang;
    }
}
