<?php

use App\Models\Pengiriman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailBarangController;
use App\Models\RiwayatPemeliharaanBarang;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\RiwayatPemeliharaanBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('penyewa', [PenyewaController::class, 'index'])->name('penyewa');
Route::get('penyewa/sewa', [TransaksiController::class, 'lihatTransaksi'])->name('penyewa.sewa');
Route::get('penyewa/sewa/{id}', [TransaksiController::class, 'create'])->name('penyewa.isi_data_sewa');
Route::post('penyewa/sewa', [TransaksiController::class, 'addTransaksi'])->name('penyewa.store_data_sewa');

Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('admin/pengiriman', [PengirimanController::class, 'lihatTransaksi'])->name('admin.pengiriman');
Route::post('admin/pengiriman', [PengirimanController::class, 'setTransaksi'])->name('admin.pengiriman');

Route::get('admin/pemeliharaan', [RiwayatPemeliharaanBarangController::class, 'lihatDetailBarang'])->name('admin.pemeliharaan');
Route::get('admin/pemeliharaan/{id}', [RiwayatPemeliharaanBarangController::class, 'create'])->name('admin.data_pemeliharaan');
Route::post('admin/pemeliharaan', [RiwayatPemeliharaanBarangController::class, 'addRiwayat'])->name('admin.store_data_pemeliharaan');

Route::get('admin/tambah_barang', [BarangController::class, 'lihatBarang'])->name('admin.tambah_barang');
Route::get('admin/tambah_barang/{id}', [DetailBarangController::class, 'create'])->name('admin.data_tambah_barang');
Route::post('admin/tambah_barang', [DetailBarangController::class, 'addDetailBarang'])->name('admin.store_data_tambah_barang');
