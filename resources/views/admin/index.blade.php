@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width:500px">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Pengiriman List</h1>
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Kirim</th>
                        <th>Status</th>
                        <th>Driver ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengirimans as $pengiriman)
                        <tr>
                            <th>{{ $pengiriman->id }}</th>
                            <th>{{ $pengiriman->tanggal_kirim }}</th>
                            <th>{{ $pengiriman->status }}</th>
                            <th>{{ $pengiriman->driver_id }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Riwayat Pemeliharaan Barang List</h1>
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Pemeliharaan</th>
                        <th>Deskripsi</th>
                        <th>Detail Barang ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemeliharaans as $pemeliharaan)
                        <tr>
                            <th>{{ $pemeliharaan->id }}</th>
                            <th>{{ $pemeliharaan->tanggal_pemeliharaan }}</th>
                            <th>{{ $pemeliharaan->deskripsi }}</th>
                            <th>{{ $pemeliharaan->detail_barang_id }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Detail Barang List</h1>
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Barang ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detailBarangs as $detailBarang)
                        <tr>
                            <th>{{ $detailBarang->id }}</th>
                            <th>{{ $detailBarang->nama }}</th>
                            <th>{{ $detailBarang->status }}</th>
                            <th>{{ $detailBarang->barang_id }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
