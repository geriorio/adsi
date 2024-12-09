@extends('layouts.penyewa')

@section('content')
    <div class="d-flex justify-content-center">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width:500px">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <h1 class="text-center">Penyewa Homepage</h1>

    @if ($transaksis->count() > 0)
        <div class="container mt-5">
            <div class="col-lg-6 mx-auto">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tanggal Sewa</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Metode</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->id }}</td>
                                    <td>{{ $transaksi->tanggal_sewa }}</td>
                                    <td>{{ $transaksi->total_biaya }}</td>
                                    <td>{{ $transaksi->metode_pembayaran }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
