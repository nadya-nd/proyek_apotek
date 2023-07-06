<?php

namespace Database\Seeders;

use App\Models\Obat;
use App\Models\User;
use App\Models\Pembelian;
use App\Models\detailObat;
use App\Models\detailPembelian;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Obat::create([
            'id'=>'11111',
            'nama_obat'=>'Decolsin',
        ]);

        Obat::create([
            'id'=>'22222',
            'nama_obat'=>'Dextamine',
        ]);

        Obat::create([
            'id'=>'33333',
            'nama_obat'=>'Decolgen',
        ]);

        Obat::create([
            'id'=>'44444',
            'nama_obat'=>'Siladex Antitussive',
        ]);

        Pembelian::create([
            'id'=>'20011',
            'id_member'=>'10001',
            'tgl_pembelian'=>'2023-05-25',
            'total_harga_pembelian'=>'50000.00',
        ]);

        Pembelian::create([
            'id'=>'20012',
            'id_member'=>'10002',
            'tgl_pembelian'=>'2023-06-01',
            'total_harga_pembelian'=>'30000.00',
        ]);

        Pembelian::create([
            'id'=>'20013',
            'id_member'=>'10003',
            'tgl_pembelian'=>'2023-06-05',
            'total_harga_pembelian'=>'15000.00',
        ]);

        Pembelian::create([
            'id'=>'20014',
            'id_member'=>'10004',
            'tgl_pembelian'=>'2023-06-14',
            'total_harga_pembelian'=>'40000.00',
        ]);

        detailPembelian::create([
            'id'=>'10011',
            'id_pembelian'=>'20011',
            'tgl_pembelian'=>'2023-05-25',
            'estimasi_obat_habis'=>'2023-06-25',
            'subtotal_harga'=>'50000.00',
        ]);

        detailPembelian::create([
            'id'=>'10012',
            'id_pembelian'=>'20012',
            'tgl_pembelian'=>'2023-06-01',
            'estimasi_obat_habis'=>'2023-07-01',
            'subtotal_harga'=>'30000.00',
        ]);

        detailPembelian::create([
            'id'=>'10013',
            'id_pembelian'=>'20013',
            'tgl_pembelian'=>'2023-06-05',
            'estimasi_obat_habis'=>'2023-07-05',
            'subtotal_harga'=>'15000.00',
        ]);

        detailPembelian::create([
            'id'=>'10014',
            'id_pembelian'=>'20014',
            'tgl_pembelian'=>'2023-06-14',
            'estimasi_obat_habis'=>'2023-07-14',
            'subtotal_harga'=>'40000.00',
        ]);

        detailObat::create([
            'id'=>'1',
            'id_member'=>'10001',
            'id_obat'=>'11111',
            'id_pembelian'=>'20011',
            'id_detail_pembelian'=>'10011',
            'tgl_dipesan'=>'2023-05-25',
        ]);

        detailObat::create([
            'id'=>'2',
            'id_member'=>'10002',
            'id_obat'=>'22222',
            'id_pembelian'=>'20012',
            'id_detail_pembelian'=>'10012',
            'tgl_dipesan'=>'2023-06-01',
        ]);

        detailObat::create([
            'id'=>'3',
            'id_member'=>'10003',
            'id_obat'=>'33333',
            'id_pembelian'=>'20013',
            'id_detail_pembelian'=>'10013',
            'tgl_dipesan'=>'2023-06-05',
        ]);

        detailObat::create([
            'id'=>'4',
            'id_member'=>'10004',
            'id_obat'=>'44444',
            'id_pembelian'=>'20014',
            'id_detail_pembelian'=>'10014',
            'tgl_dipesan'=>'2023-06-14',
        ]);
    }
}
