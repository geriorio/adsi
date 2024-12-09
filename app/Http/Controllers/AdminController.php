<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DetailBarang;
use App\Models\Pengiriman;
use App\Models\RiwayatPemeliharaanBarang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pengirimans = Pengiriman::all();
        $pemeliharaans = RiwayatPemeliharaanBarang::all();
        $detailBarangs = DetailBarang::all();

        return view('admin.index', [
            'pengirimans' => $pengirimans,
            'pemeliharaans' => $pemeliharaans,
            'detailBarangs' => $detailBarangs,
        ]);
    }
}
