<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'kode_barang' => '001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '002',
            'nama_barang' => 'Pocari Sweet',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '50'
        ],
        [
            'kode_barang' => '003',
            'nama_barang' => 'Silverqueen',
            'kategori_barang' => 'snack',
            'harga' => '12500',
            'qty' => '45'
        ],
        [
            'kode_barang' => '004',
            'nama_barang' => 'Sania',
            'kategori_barang' => 'Sembako',
            'harga' => '17000',
            'qty' => '20'
        ],
        [
            'kode_barang' => '005',
            'nama_barang' => 'Mie Sedap',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '006',
            'nama_barang' => 'Ultra Milk',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '40'
        ],
        [
            'kode_barang' => '007',
            'nama_barang' => 'Top',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '008',
            'nama_barang' => 'Beras Ramos',
            'kategori_barang' => 'Sembako',
            'harga' => '64000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '009',
            'nama_barang' => 'Mie Gaga',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '010',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '011',
            'nama_barang' => 'Nutella',
            'kategori_barang' => 'Makanan',
            'harga' => '6000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '012',
            'nama_barang' => 'Bimoli',
            'kategori_barang' => 'Sembako',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '013',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '014',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '015',
            'nama_barang' => 'Chiki Ball',
            'kategori_barang' => 'Snack',
            'harga' => '1000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '016',
            'nama_barang' => 'Putri Ayu',
            'kategori_barang' => 'Sembako',
            'harga' => '10000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '017',
            'nama_barang' => 'Mie Sukses',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '018',
            'nama_barang' => 'Fanta',
            'kategori_barang' => 'Minuman',
            'harga' => '2000',
            'qty' => '100'
        ],
        [
            'kode_barang' => '019',
            'nama_barang' => 'Taro net',
            'kategori_barang' => 'Snack',
            'harga' => '600',
            'qty' => '100'
        ],
        [
            'kode_barang' => '020',
            'nama_barang' => 'Biskuat',
            'kategori_barang' => 'Snack',
            'harga' => '500',
            'qty' => '100'
        ],
    ];

        DB::table('barang')->insert($data);
    }
}
