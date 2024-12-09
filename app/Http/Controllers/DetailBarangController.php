<?php

namespace App\Http\Controllers;

use App\Models\DetailBarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailBarangController extends Controller
{
    public function addDetailBarang(Request $request)
    {
        $validatedData = $request->validate([
            'idBarang' => 'required|numeric',
            'nama' => 'required',
            'status' => 'required',
        ]);

        $detailBarang = DetailBarang::create([
            'barang_id' => $validatedData['idBarang'],
            'nama' => $validatedData['nama'],
            'status' => $validatedData['status'],
        ]);

        if ($validatedData['status'] == 'available') {
            $qty = 1;
            $barang = app('App\Http\Controllers\BarangController')->addStock($validatedData['idBarang'], $qty);
        }

        return redirect()->route('admin')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function getAllDetailBarang()
    {
        $listDetailBarang = DetailBarang::all();
        return $listDetailBarang;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data_tambah_barang');
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
    public function show(DetailBarang $detailBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailBarang $detailBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailBarang $detailBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailBarang $detailBarang)
    {
        //
    }
}
