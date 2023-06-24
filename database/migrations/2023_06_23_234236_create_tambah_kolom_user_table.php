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
        Schema::table('users',function(Blueprint $table){
            $table->text('username',50)->after('id')->nullable()->unique();
            $table->bigInteger('bidang_id')->after('name')->nullable()->unsigned();
            $table->string("role")->nullable()->after('email');



            $table->foreign('bidang_id')->references('id')->on('bidang')
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
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('username');
            $table->dropColumn('bidang_id');
            $table->dropColumn('role');
        });
    }
};
