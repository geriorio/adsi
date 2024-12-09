@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Barang List</h1>
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga Sewa</th>
                        <th>Stock</th>
                        <th>Tambah Barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <th>{{ $barang->id }}</th>
                            <th>{{ $barang->nama }}</th>
                            <th>{{ $barang->kategori }}</th>
                            <th>{{ $barang->harga_sewa }}</th>
                            <th>{{ $barang->stock }}</th>
                            <th>
                                <a href="{{ route('admin.data_tambah_barang', ['id' => $barang->id]) }}" class="btn btn-success">+</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
