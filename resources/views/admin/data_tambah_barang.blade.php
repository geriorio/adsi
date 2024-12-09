@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center" style="margin:20px 0px;">
        <form action="{{ Route('admin.store_data_tambah_barang') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                <option value="disewakan" {{ old('status') == 'disewakan' ? 'selected' : '' }}>Disewakan</option>
            </select>
            @error('status')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            <br>

            <input type="hidden" name="idBarang" id="idBarang" value="{{ Route::current()->parameter('id') }}">

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </div>
        </form>
    </div>
@endsection
