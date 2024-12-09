<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BarangController as ControllersBarangController;

class TransaksiController extends Controller
{
    public function lihatTransaksi()
    {
        $listBarang = app('App\Http\Controllers\BarangController')->getAllBarang();
        return view('penyewa.sewa', [
            'barangs' => $listBarang,
        ]);
    }

    public function addTransaksi(Request $request)
    {
        // Validate the data
        $validatedData = $request->validate([
            'tanggalSewa' => 'required|date',
            'quantity' => 'required|numeric',
            'metodePembayaran' => 'required',
        ]);
        $barang = Barang::find($request->idBarang);
        if ($request->quantity > $barang->stock) {
            return redirect()->back()->withErrors(['quantity' => 'Quantity must be less or equal to ' . $barang->stock . '.'])->withInput();
        }

        $total_biaya = $barang->harga_sewa * $request->quantity;
        $transaksi = Transaksi::create([
            'tanggal_sewa' => $validatedData['tanggalSewa'],
            'total_biaya' => $total_biaya,
            'metode_pembayaran' => $validatedData['metodePembayaran'],
        ]);

        // kurangi stock barang
        $barang = app('App\Http\Controllers\BarangController')->subtractStock($request->idBarang, $validatedData['quantity']);

        // buat transaksi-detail barang
        $listTransaksiDetailBarang = app('App\Http\Controllers\TransaksiDetailBarangController')->sewaBarang($transaksi->id, $request->idBarang, $validatedData['quantity']);

        return redirect()->route('penyewa')->with('success', 'Transaksi berhasil dilakukan.');
    }

    public function setAllIdPengiriman(array $listIdTransaksi, int $idPengiriman)
    {
        foreach ($listIdTransaksi as $idTransaksi) {
            $transaksi = $this->setIdPengiriman($idTransaksi, $idPengiriman);
        }
        return 'success';
    }

    public function setIdPengiriman(int $idTransaksi, int $idPengiriman)
    {
        $transaksi = Transaksi::find($idTransaksi);
        $transaksi->pengiriman_id = $idPengiriman;
        $transaksi->save();
        return $transaksi;
    }

    public function getAllTransaksi()
    {
        return Transaksi::all();
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
    public function create(Request $request)
    {
        return view('penyewa.data_sewa');
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
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
