<?php

namespace Database\Seeders;

use App\Models\Satuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satuan =[
            [
                'satnama' => 'Pcs',
                'slug'=> 'pcs'
            ],
            [
                'satnama' => 'Dus',
                'slug'=> 'dus'
            ],
            [
                'satnama' => 'Pack',
                'slug'=> 'pack'
            ],
            [
                'satnama' => 'Rim',
                'slug'=> 'rim'
            ],
            [
                'satnama' => 'Lusin',
                'slug'=> 'lusin'
            ]

        ];

        foreach ($satuan as $satuanbarang) {
            $stn = new Satuan();

            $stn->satnama = $satuanbarang['satnama'];
            $stn->slug = $satuanbarang['slug'];

            $stn->save();
        }
    }
}
