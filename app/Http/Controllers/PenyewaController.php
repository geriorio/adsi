<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penyewa.index', [
            'transaksis' => Transaksi::all()
        ]);
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
    public function show(Penyewa $penyewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyewa $penyewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyewa $penyewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyewa $penyewa)
    {
        //
    }
}
