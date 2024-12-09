@extends('layouts.penyewa')

@section('content')
    <h1 class="text-center mb-5">Sewa Barang</h1>

    <div class="row text-center">
        @foreach ($barangs as $barang)
            @if ($barang->stock > 0)
                <div class="col-md-3 col-6">
                    <div class="card p-1">
                        <div class="image-container">
                            <img src="{{ asset($barang->foto_url) }}" class="card-img-top p-2" alt="Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama }}</h5>
                            <p>Stock: {{ $barang->stock }}</p>
                            <a href="{{ route('penyewa.isi_data_sewa', ['id' => $barang->id]) }}" class="btn btn-primary mt-3">Sewa</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
