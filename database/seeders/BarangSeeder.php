<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert(array(
            array(
                'kode' => '120',
                'nama' => 'Selotip',
                'harga' => '18000',
                'deskripsi' => 'Selotip atau isolasi adalah pita perekat atau lakban (dari bahasa Belanda, plakband) berbahan dasar karet yang biasa digunakan baik perorangan atau perusahaan.',
                'satuan_id' => '1',
            ),
            array(
                'kode' => '121',
                'nama' => 'Pensil',
                'harga' => '12900',
                'deskripsi' => 'Pensil atau potlot adalah suatu alat tulis dan lukis yang awalnya terbuat dari grafit murni.',
                'satuan_id' => '3',
            ),
            array(
                'kode' => '122',
                'nama' => 'Buku Tulis',
                'harga' => '7000',
                'deskripsi' => 'Buku catatan (juga disebut buku tulis atau buku notes) adalah buku atau tumpukan halaman kertas yang sering diatur dan digunakan untuk tujuan seperti merekam catatan atau memo',
                'satuan_id' => '1',
            ),
        ));
    }
}
