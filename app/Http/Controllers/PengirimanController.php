<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function lihatTransaksi()
    {
        $transaksis = $this->getAllTransaksi();
        $drivers = $this->getAllDriver();

        return view('admin.pengiriman', [
            'transaksis' => $transaksis,
            'drivers' => $drivers,
        ]);
    }

    public function setTransaksi(Request $request)
    {
        $validatedData = $request->validate([
            'listIdTransaksi' => 'required',
            'tanggal_kirim' => 'required|date',
            'driver_id' => 'required',
        ]);

        $pengiriman = Pengiriman::create([
            'tanggal_kirim' => $validatedData['tanggal_kirim'],
            'driver_id' => $validatedData['driver_id'],
            'status' => 'Belum dikirim',
        ]);

        $reply = app('\App\Http\Controllers\TransaksiController')->setAllIdPengiriman($request['listIdTransaksi'], $pengiriman->id);

        if($reply == 'success') return redirect()->route('admin')->with('success', 'Pengiriman berhasil dijadwalkan.');
    }

    public function getAllTransaksi()
    {
        return app('App\Http\Controllers\TransaksiController')->getAllTransaksi();
    }

    public function getAllDriver()
    {
        return app('App\Http\Controllers\DriverController')->getAllDriver();
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
    public function show(Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengiriman $pengiriman)
    {
        //
    }
}
