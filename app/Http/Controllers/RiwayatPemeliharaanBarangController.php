<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPemeliharaanBarang;
use App\Http\Controllers\Controller;
use App\Models\DetailBarang;
use Illuminate\Http\Request;

class RiwayatPemeliharaanBarangController extends Controller
{
    public function lihatDetailBarang()
    {
        $listDetailBarang = app('App\Http\Controllers\DetailBarangController')->getAllDetailBarang();
        return view('admin.pemeliharaan', [
            'detailBarangs' => $listDetailBarang,
        ]);
    }

    public function addRiwayat(Request $request)
    {
        $validatedData = $request->validate([
            'idDetailBarang' => 'required|numeric',
            'tanggalPemeliharaan' => 'required|date',
            'deskripsi' => 'required|string'
        ]);

        $riwayatPemeliharaanBarang = RiwayatPemeliharaanBarang::create([
            'tanggal_pemeliharaan' => $validatedData['tanggalPemeliharaan'],
            'deskripsi' => $validatedData['deskripsi'],
            'detail_barang_id' => $validatedData['idDetailBarang'],
        ]);

        return redirect()->route('admin')->with('success', 'Pemeliharaan berhasil ditambahkan.');
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
        return view('admin.data_pemeliharaan');
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
    public function show(RiwayatPemeliharaanBarang $riwayatPemeliharaanBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RiwayatPemeliharaanBarang $riwayatPemeliharaanBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RiwayatPemeliharaanBarang $riwayatPemeliharaanBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RiwayatPemeliharaanBarang $riwayatPemeliharaanBarang)
    {
        //
    }
}
