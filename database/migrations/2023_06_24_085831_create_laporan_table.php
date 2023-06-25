<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->longText('judul')->nullable();
            $table->longText('latar_belakang')->nullable();
            $table->longText('dasar_hukum')->nullable();
            // $table->longText('uu'); DROPDOWN, RELASI BERARTI
            $table->longText('dasar_pelaksanaan')->nullable();
            $table->longText('waktu_pelaksanaan')->nullable();
            $table->date('hari')->nullable();
            $table->longText('pukul1')->nullable();
            $table->longText('pukul2')->nullable();
            $table->longText('tempat')->nullable();
            $table->longText('peserta')->nullable();
            $table->longText('tujuan')->nullable();
            $table->longText('identifikasi_masalah')->nullable();
            $table->longText('dokumentasi')->nullable();
            $table->string('jabatan1')->nullable();
            $table->string('nama1')->nullable();
            $table->string('fungsional1')->nullable();
            $table->string('nip1')->nullable();
            $table->string('jabatan2')->nullable();
            $table->string('nama2')->nullable();
            $table->string('fungsional2')->nullable();
            $table->string('nip2')->nullable();
            $table->string('jabatan3')->nullable();
            $table->string('nama3')->nullable();
            $table->string('fungsional3')->nullable();
            $table->string('nip3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
};
