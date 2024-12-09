@extends('layouts.penyewa')

@section('content')
    <div class="d-flex justify-content-center" style="margin:20px 0px;">
        <form action="{{ route('penyewa.store_data_sewa') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="tanggalSewa" class="form-label">Tanggal Sewa</label>
            <input type="date" class="form-control" id="tanggalSewa" name="tanggalSewa" value="{{ old('tanggalSewa') }}"
                required>
            @error('tanggalSewa')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}"
                required>
            @error('quantity')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <label for="metodePembayaran" class="form-label">Metode Pembayaran</label>
            <select class="form-select" id="metodePembayaran" name="metodePembayaran" required>
                <option value="" selected disabled>Pilih Metode Pembayaran</option>
                <option value="QRIS">QRIS</option>
                <option value="BCA">BCA</option>
                <option value="BRI">BRI</option>
                <option value="OVO">OVO</option>
            </select>
            @error('metodePembayaran')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <input type="hidden" name="idBarang" id="idBarang" value="{{ Route::current()->parameter('id') }}">

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Sewa Barang</button>
            </div>
        </form>
    </div>
@endsection
