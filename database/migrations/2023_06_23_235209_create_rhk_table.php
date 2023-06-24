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
        Schema::create('rhk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rhk');
            $table->bigInteger('bidang_id')->unsigned();
            $table->bigInteger('intervensi_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();


            $table->foreign('bidang_id')->references('id')->on('bidang')
            ->onDelete('cascade');
            $table->foreign('intervensi_id')->references('id')->on('intervensi')
            ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('rhk');
    }
};
