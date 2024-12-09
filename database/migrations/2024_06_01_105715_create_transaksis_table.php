<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali')->nullable();
            $table->float('total_biaya');
            $table->string('metode_pembayaran');
            $table->string('status')->default(0);
            $table->foreignId('pengiriman_id')->nullable()->constrained('pengirimans')->onDelete('cascade');
            $table->foreignId('penyewa_id')->default(1)->constrained('penyewas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
