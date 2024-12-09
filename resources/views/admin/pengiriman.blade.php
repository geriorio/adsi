@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Transaksi List</h1>
            <form action="{{ route('admin.pengiriman') }}" method="POST">
                @csrf
                <table class="table table-responsive text-center">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Tanggal Sewa</th>
                            <th>Total Biaya</th>
                            <th>Metode Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksis as $transaksi)
                            @if ($transaksi->pengiriman_id == null)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="listIdTransaksi[]" value="{{ $transaksi->id }}">
                                    </td>
                                    <td>{{ $transaksi->tanggal_sewa }}</td>
                                    <td>{{ $transaksi->total_biaya }}</td>
                                    <td>{{ $transaksi->metode_pembayaran }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="mb-3">
                    <label for="driver" class="form-label">Driver</label>
                    <select name="driver_id" id="driver" class="form-control" required>
                        <option value="">Select Driver</option>
                        @foreach ($drivers as $driver)
                            <option value="{{ $driver->id }}">{{ $driver->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tanggalKirim" class="form-label">Tanggal Kirim</label>
                    <input type="date" name="tanggal_kirim" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Buat Pengiriman</button>
                </div>
            </form>
        </div>
    </div>
@endsection
