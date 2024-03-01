<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Ana',
                'penjualan_kode' => 'PJ1',
                'penjualan_tanggal' => '2024-01-02',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Ana',
                'penjualan_kode' => 'PJ2',
                'penjualan_tanggal' => '2024-01-02',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PJ3',
                'penjualan_tanggal' => '2024-01-03',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Cici',
                'penjualan_kode' => 'PJ4',
                'penjualan_tanggal' => '2024-01-03',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Deni',
                'penjualan_kode' => 'PJ5',
                'penjualan_tanggal' => '2024-01-04',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Farah',
                'penjualan_kode' => 'PJ6',
                'penjualan_tanggal' => '2024-01-04',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Gilang',
                'penjualan_kode' => 'PJ7',
                'penjualan_tanggal' => '2024-01-05',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Hana',
                'penjualan_kode' => 'PJ8',
                'penjualan_tanggal' => '2024-01-05',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Ilay',
                'penjualan_kode' => 'PJ9',
                'penjualan_tanggal' => '2024-01-06',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Jenny',
                'penjualan_kode' => 'PJ10',
                'penjualan_tanggal' => '2024-01-06',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
