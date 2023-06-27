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
        Schema::table('laporan', function (Blueprint $table) {
            $table->bigInteger('user_id')->after('id')->nullable()->unsigned();
            $table->bigInteger('rhk_id')->after('user_id')->nullable()->unsigned();


            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('rhk_id')->references('id')->on('rhk')
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
        Schema::table('laporan',function(Blueprint $table){
            $table->dropColumn('users_id');
            $table->dropColumn('rhk_id');
        });
    }
};
