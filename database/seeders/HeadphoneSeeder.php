<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HeadphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('headphone')->insert([
            'name_headphone' => 'WH-1000XM4',
            'nama_brand' => 'son',
            'tahun' => '2020',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => 'yes',
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3700000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/wh1000xm4.webp',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'ATH-M50x',
            'nama_brand' => 'aud',
            'tahun' => '2016',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "no",
            'enclosure' => 'Closed-back',
            'mic' => 0,
            'harga' => '2000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/ath_m50x.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
