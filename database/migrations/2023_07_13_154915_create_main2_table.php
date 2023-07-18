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
        Schema::create('dashboard', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('bidang_id')->unsigned();
            $table->bigInteger('intervensi_id')->unsigned();
            $table->bigInteger('rhk_id')->unsigned();
            $table->bigInteger('laporan_id')->unsigned();
            $table->timestamps();


        
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('bidang_id')->references('id')->on('bidang')
            ->onDelete('cascade');
            $table->foreign('intervensi_id')->references('id')->on('intervensi')
            ->onDelete('cascade');
            $table->foreign('rhk_id')->references('id')->on('rhk')
            ->onDelete('cascade');
            $table->foreign('laporan_id')->references('id')->on('laporan')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboard');
    }
};
