<?php

namespace App\Http\Controllers;

use App\Models\TransaksiDetailBarang;
use App\Http\Controllers\Controller;
use App\Models\DetailBarang;
use Illuminate\Http\Request;

class TransaksiDetailBarangController extends Controller
{
    function sewaBarang($idTransaksi, $idBarang, $quantity)
    {
        $listDetailBarang = DetailBarang::setStatusSewa($idBarang, $quantity);
        $listTransaksiDetailBarang = [];

        foreach($listDetailBarang as $detailBarang){
            $transaksiDetailBarang = TransaksiDetailBarang::create([
                'detail_barang_id' => $detailBarang->id,
                'transaksi_id' => $idTransaksi,
            ]);
            
            array_push($listTransaksiDetailBarang, $transaksiDetailBarang);
        }

        return $listTransaksiDetailBarang;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaksiDetailBarang $transaksiDetailBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaksiDetailBarang $transaksiDetailBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransaksiDetailBarang $transaksiDetailBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaksiDetailBarang $transaksiDetailBarang)
    {
        //
    }
}
