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
            'wireless' => 'Yes',
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3700000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/wh1000xm4.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'ATH-M50x',
            'nama_brand' => 'aud',
            'tahun' => '2016',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Closed-back',
            'mic' => 0,
            'harga' => '2000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/ath_m50x.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'AKG N60NC Wireless',
            'nama_brand' => 'akg',
            'tahun' => '2019',
            'ANC' => 1,
            'tipe_headphone' => 'On-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3000000',
            'rating' => '7',
            'image_path_headphone' => '/gambar/headphone/AKG_N60NC_Wireless.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'AKG N700NC',
            'nama_brand' => 'akg',
            'tahun' => '2018',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '1500000',
            'rating' => '7',
            'image_path_headphone' => '/gambar/headphone/AKG_N700NC.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'ATH-M40x',
            'nama_brand' => 'aud',
            'tahun' => '2016',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Closed-back',
            'mic' => 0,
            'harga' => '1200000',
            'rating' => '7',
            'image_path_headphone' => '/gambar/headphone/ath_m40x.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'ATH-DSR9BT',
            'nama_brand' => 'aud',
            'tahun' => '2019',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3700000',
            'rating' => '6',
            'image_path_headphone' => '/gambar/headphone/ath-dsr9bt.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Soundlink 2 Wireless',
            'nama_brand' => 'bos',
            'tahun' => '2018',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '4600000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/soundlink_wireless_2.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Bose 700 Headphones Wireless',
            'nama_brand' => 'bos',
            'tahun' => '2021',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '5000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/bose_700.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Bose QuietComfort 35 II',
            'nama_brand' => 'bos',
            'tahun' => '2020',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/QC35.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'JBL Live 660NC Wireless',
            'nama_brand' => 'jbl',
            'tahun' => '2021',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '2800000',
            'rating' => '7',
            'image_path_headphone' => '/gambar/headphone/Live_660NC.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'JBL Club 700BT Wireless',
            'nama_brand' => 'jbl',
            'tahun' => '2020',
            'ANC' => 0,
            'tipe_headphone' => 'On-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '2800000',
            'rating' => '6',
            'image_path_headphone' => '/gambar/headphone/Club_700BT.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sennheiser HD 660 S',
            'nama_brand' => 'sen',
            'tahun' => '2019',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Open-back',
            'mic' => 0,
            'harga' => '7000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/Hd_660S.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sennheiser HD 450BT Wireless',
            'nama_brand' => 'sen',
            'tahun' => '2020',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '4000000',
            'rating' => '7',
            'image_path_headphone' => '/gambar/headphone/HD_450BT.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sennheiser HD 650',
            'nama_brand' => 'sen',
            'tahun' => '2018',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Open-back',
            'mic' => 0,
            'harga' => '6500000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/HD_650.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sony WH-1000XM3',
            'nama_brand' => 'son',
            'tahun' => '2018',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '3000000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/wh1000xm3.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sony WH-CH710N',
            'nama_brand' => 'son',
            'tahun' => '2020',
            'ANC' => 1,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "Yes",
            'enclosure' => 'Closed-back',
            'mic' => 1,
            'harga' => '1300000',
            'rating' => '6',
            'image_path_headphone' => '/gambar/headphone/wh_ch710n.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \DB::table('headphone')->insert([
            'name_headphone' => 'Sony MDR-7506',
            'nama_brand' => 'son',
            'tahun' => '2018',
            'ANC' => 0,
            'tipe_headphone' => 'Over-Ear',
            'wireless' => "No",
            'enclosure' => 'Closed-back',
            'mic' => 0,
            'harga' => '1700000',
            'rating' => '8',
            'image_path_headphone' => '/gambar/headphone/mdr_7506.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
