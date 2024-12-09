<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Barang;
use App\Models\DetailBarang;
use App\Models\Driver;
use App\Models\Penyewa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Barang::factory()->createMany([
            [
                'nama' => 'mouse',
                'kategori' => 'gadget',
                'harga_sewa' => '89.24',
                'stock' => '5',
                'foto_url' => 'foto_produk/mouse.png'
            ],
            [
                'nama' => 'keyboard',
                'kategori' => 'gadget',
                'harga_sewa' => 47.89,
                'stock' => 2,
                'foto_url' => 'foto_produk/keyboard.png'
            ],
            [
                'nama' => 'laptop',
                'kategori' => 'gadget',
                'harga_sewa' => 829.77,
                'stock' => 3,
                'foto_url' => 'foto_produk/laptop.png'
            ],
        ]);

        DetailBarang::factory()->createMany([
            [
                'nama' => 'mouse 1',
                'status' => 'available',
                'barang_id' => '1',
            ],
            [
                'nama' => 'mouse 2',
                'status' => 'available',
                'barang_id' => '1',
            ],
            [
                'nama' => 'mouse 3',
                'status' => 'available',
                'barang_id' => '1',
            ],
            [
                'nama' => 'mouse 4',
                'status' => 'available',
                'barang_id' => '1',
            ],
            [
                'nama' => 'mouse 5',
                'status' => 'available',
                'barang_id' => '1',
            ],

            [
                'nama' => 'keyboard 1',
                'status' => 'available',
                'barang_id' => '2',
            ],
            [
                'nama' => 'keyboard 2',
                'status' => 'available',
                'barang_id' => '2',
            ],

            [
                'nama' => 'laptop 1',
                'status' => 'available',
                'barang_id' => '3',
            ],
            [
                'nama' => 'laptop 2',
                'status' => 'available',
                'barang_id' => '3',
            ],
            [
                'nama' => 'laptop 3',
                'status' => 'available',
                'barang_id' => '3',
            ],
        ]);

        Penyewa::factory()->create([
            'nama' => "John",
            'alamat' => "Klampis",
            'telepon' => '0129374',
        ]);

        Driver::factory()->count(5)->create();
    }
}
