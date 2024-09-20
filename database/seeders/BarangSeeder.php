<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1,'kategori_id' => '1' ,'barang_kode' => 'bar_1', 'barang_nama' => 'Kursi', 'harga_beli' => '50000', 'harga_jual' => '55000'],
            ['barang_id' => 2,'kategori_id' => '1', 'barang_kode' => 'bar_2', 'barang_nama' => 'Meja', 'harga_beli' => '250000', 'harga_jual' => '300000'],
            ['barang_id' => 3,'kategori_id' => '1', 'barang_kode' => 'bar_3', 'barang_nama' => 'Sapu', 'harga_beli' => '20000', 'harga_jual' => '25000'],
            ['barang_id' => 4,'kategori_id' => '3', 'barang_kode' => 'bar_4', 'barang_nama' => 'Air Mineral', 'harga_beli' => '3000', 'harga_jual' => '4000'],
            ['barang_id' => 5,'kategori_id' => '3', 'barang_kode' => 'bar_5', 'barang_nama' => 'Susu', 'harga_beli' => '4500', 'harga_jual' => '6500'],
            ['barang_id' => 6,'kategori_id' => '3', 'barang_kode' => 'bar_6', 'barang_nama' => 'Yogurt', 'harga_beli' => '5000', 'harga_jual' => '7000'],
            ['barang_id' => 7,'kategori_id' => '2', 'barang_kode' => 'bar_7', 'barang_nama' => 'Pensil', 'harga_beli' => '2000', 'harga_jual' => '2500'],
            ['barang_id' => 8,'kategori_id' => '2', 'barang_kode' => 'bar_8', 'barang_nama' => 'Penghapus', 'harga_beli' => '1000', 'harga_jual' => '2000'],
            ['barang_id' => 9,'kategori_id' => '2', 'barang_kode' => 'bar_9', 'barang_nama' => 'Bulpen', 'harga_beli' => '4000', 'harga_jual' => '5000'],
            ['barang_id' => 10,'kategori_id' => '2', 'barang_kode' => 'bar_10', 'barang_nama' => 'Laptop', 'harga_beli' => '6000000', 'harga_jual' => '6500000'],
            ['barang_id' => 11,'kategori_id' => '4', 'barang_kode' => 'bar_11', 'barang_nama' => 'Komputer', 'harga_beli' => '7000000', 'harga_jual' => '7500000'],
            ['barang_id' => 12,'kategori_id' => '4', 'barang_kode' => 'bar_12', 'barang_nama' => 'HP', 'harga_beli' => '3000000', 'harga_jual' => '3500000'],
            ['barang_id' => 13,'kategori_id' => '4', 'barang_kode' => 'bar_13', 'barang_nama' => 'Baju', 'harga_beli' => '150000', 'harga_jual' => '200000'],
            ['barang_id' => 14,'kategori_id' => '4', 'barang_kode' => 'bar_14', 'barang_nama' => 'Kemeja', 'harga_beli' => '120000', 'harga_jual' => '150000'],
            ['barang_id' => 15,'kategori_id' => '5', 'barang_kode' => 'bar_15', 'barang_nama' => 'Celana', 'harga_beli' => '280000', 'harga_jual' => '350000'],
            

        ];
        DB::table('m_barang')->insert($data);
    }
}