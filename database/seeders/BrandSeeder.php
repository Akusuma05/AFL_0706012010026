<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brand')->insert([
            'brand_code' => 'son',
            'nama' => 'Sony',
            'asal' => 'Japan',
            'image_path_brand' => '/gambar/brand/sony.svg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('brand')->insert([
            'brand_code' => 'jbl',
            'nama' => 'JBL',
            'asal' => 'America',
            'image_path_brand' => '/gambar/brand/JBL.svg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('brand')->insert([
            'brand_code' => 'aud',
            'nama' => 'Audio Technica',
            'asal' => 'Japan',
            'image_path_brand' => '/gambar/brand/audio_technica.svg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('brand')->insert([
            'brand_code' => 'bos',
            'nama' => 'Bose',
            'asal' => 'America',
            'image_path_brand' => '/gambar/brand/bose.svg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
