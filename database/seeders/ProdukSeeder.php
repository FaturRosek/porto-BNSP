<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama' => 'Lenovo Thinkpad',
            'harga' => '3.000.000',
            'prosesor' => 'AMD Ryzen 5',
            'memori' => 'RAM 8 GB',
            'ukuran' => '14 Inch',
            'storage' => 'SSD 215'
        ]);
        Produk::create([
            'nama' => 'Lenovo Thinkpad',
            'harga' => '3.000.000',
            'prosesor' => 'AMD Ryzen 5',
            'memori' => 'RAM 8 GB',
            'ukuran' => '14 Inch',
            'storage' => 'SSD 215'
        ]);
    }
}
