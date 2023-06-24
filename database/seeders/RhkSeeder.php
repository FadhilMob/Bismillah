<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RhkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rhk')->insert([
            'id'=> '1',
            'nama_rhk' => 'Terlaksananya penyusunan dokumen perencanaan lingkungan hidup yang ditetapkan',
            'bidang_id' => '111',
            'intervensi_id' => '1',
            'user_id' => '2',
           

        ]);
        DB::table('rhk')->insert([
            'id'=> '2',
            'nama_rhk' =>'Tersedianya dokumen pendukung pemberian penghargaan lingkungan hidup tingkat kota/provinsi dan nasional siap disampaikan',
            'bidang_id' => '111',
            'intervensi_id' => '1',
            'user_id' => '2',
            
        ]);
        DB::table('rhk')->insert([
            'id'=> '3',
            'nama_rhk' =>'Terlaksannya pembinaan dan pengembangan kelembagaan kelompok masyarakat peduli lingkungan hidup dan peningkatan peran serta masyarakat dan pelaporan masyarakat dalam pelestarian fungsi lingkungan hidup',
            'bidang_id' => '111',
            'intervensi_id' => '1',
            'user_id' => '2',
            
        ]);
        DB::table('rhk')->insert([
            'id'=> '4',
            'nama_rhk' => 'Terlaksananya penyusunan dokumen perencanaan lingkungan hidup yang ditetapkan',
            'bidang_id' => '111',
            'intervensi_id' => '2',
            'user_id' => '2',
            

        ]);
        DB::table('rhk')->insert([
            'id'=> '5',
            'nama_rhk' =>'Tersedianya dokumen pendukung pemberian penghargaan lingkungan hidup tingkat kota/provinsi dan nasional siap disampaikan',
            'bidang_id' => '111',
            'intervensi_id' => '2',
            'user_id' => '2',
           
        ]);
        DB::table('rhk')->insert([
            'id'=> '6',
            'nama_rhk' =>'Terlaksannya pembinaan dan pengembangan kelembagaan kelompok masyarakat peduli lingkungan hidup dan peningkatan peran serta masyarakat dan pelaporan masyarakat dalam pelestarian fungsi lingkungan hidup',
            'bidang_id' => '111',
            'intervensi_id' => '2',
            'user_id' => '2',
            
        ]);
    }
}
