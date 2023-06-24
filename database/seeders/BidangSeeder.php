<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidang')->insert([
            'id'=> '111',
            'nama_bidang' => 'Bidang Penataan dan Penaatan Lingkungan',
            'nama_kategori' => 'Pedal',
           
        ]);
        DB::table('bidang')->insert([
            'id'=> '112',
            'nama_bidang' => 'Bidang Penataan dan Penaatan Lingkungan',
            'nama_kategori' => 'Penyuluh',
            
        ]);
        DB::table('bidang')->insert([
            'id'=> '113',
            'nama_bidang' => 'Bidang Penataaan dan Penaatan Lingkungan',
            'nama_kategori' => 'Pengawas',
            
        ]);
        DB::table('bidang')->insert([
            'id'=> '114',
            'nama_bidang' => 'Bidang Pengendalian Pencemaran, Pemeliharaan Lingkungan, dan Pertamanan',
            'nama_kategori' => 'Pedal',
            
        ]);
        DB::table('bidang')->insert([
            'id'=> '115',
            'nama_bidang' => 'Bidang Pengelolaan Persampahan dan Pengelolaan Limbah Bahan Berbahaya dan Beracun',
            'nama_kategori' => 'Pedal',
          
        ]);
        DB::table('bidang')->insert([
            'id'=> '116',
            'nama_bidang' => 'Bidang Pengelolaan Persampahan dan Pengelolaan Limbah Bahan Berbahaya dan Beracun',
            'nama_kategori' => 'Penyuluh',
           
        ]);
        DB::table('bidang')->insert([
            'id'=> '117',
            'nama_bidang' => 'Administrator',
            'nama_kategori' => 'Admin',
           
        ]);
    }
}
