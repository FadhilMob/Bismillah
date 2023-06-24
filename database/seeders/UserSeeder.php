<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'000 111 ',
            'name' => 'Administrator Update',
            'bidang_id' => '117',
            'email' => 'adminUpdate@admin.com',
            'role' => 'admin',
            'password' => Hash::make('0987654321'),
        ]);
        DB::table('users')->insert([
            'username'=>'19800427 201001 2 013',
            'name' => 'Puspita Dwi Apriliyanti',
            'bidang_id' => '111',
            'email' => 'puspitadwi@gmail.com',
            'role' => 'user',
            'password' => Hash::make('MalanG12345'),
        ]);
    }
}
