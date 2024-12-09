@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center" style="margin:20px 0px;">
        <form action="{{ Route('admin.store_data_pemeliharaan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="tanggalPemeliharaan" class="form-label">Tanggal Pemeliharaan</label>
            <input type="date" class="form-control" id="tanggalPemeliharaan" name="tanggalPemeliharaan" value="{{ old('tanggalPemeliharaan') }}"
                required>
            @error('tanggalPemeliharaan')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"
                required>
            @error('deskripsi')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <input type="hidden" name="idDetailBarang" id="idDetailBarang" value="{{ Route::current()->parameter('id') }}">

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Tambah Pemeliharaan</button>
            </div>
        </form>
    </div>
@endsection
