<nav class="navbar navbar-expand-lg px-4 py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin') }}">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin') ? 'active' : '' }}" href="{{ route('admin') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.pengiriman') ? 'active' : '' }}" href="{{ route('admin.pengiriman') }}">Pengiriman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.pemeliharaan') ? 'active' : '' }}" href="{{ route('admin.pemeliharaan') }}">Pemeliharaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.tambah_barang') ? 'active' : '' }}" href="{{ route('admin.tambah_barang') }}">Tambah Barang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
