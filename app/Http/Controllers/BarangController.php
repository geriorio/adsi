<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function lihatBarang(){
        $listBarang = $this->getAllBarang();

        return view('admin.tambah_barang', [
            'barangs' => $listBarang,
        ]);
    }

    public function getAllBarang(){
        return Barang::all();
    }

    public function addStock($idBarang, $qty){
        $barang = Barang::addStock($idBarang, $qty);
        return $barang;
    }

    public function subtractStock($idBarang, $qty){
        $barang = Barang::subtractStock($idBarang, $qty);
        return $barang;
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
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
