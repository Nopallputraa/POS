<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT. Kring Cell',
                'supplier_alamat' => 'Malang, Indonesia',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'CV. JMP Jaya',
                'supplier_alamat' => 'Malang, Indonesia',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP03',
                'supplier_nama' => 'UD. Chelsea Biru',
                'supplier_alamat' => 'Jakarta, Indonesia',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}