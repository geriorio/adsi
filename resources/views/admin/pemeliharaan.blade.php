@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-5">Detail Barang List</h1>
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th style="width:10%">ID</th>
                        <th style="width:50%">Nama</th>
                        <th>Tambah Pemeliharaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detailBarangs as $detailBarang)
                        <tr>
                            <th style="width:10%">{{ $detailBarang->id }}</th>
                            <th style="width:50%">{{ $detailBarang->nama }}</th>
                            <th>
                                <a href="{{ route('admin.data_pemeliharaan', ['id' => $detailBarang->id]) }}" class="btn btn-success">+</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
