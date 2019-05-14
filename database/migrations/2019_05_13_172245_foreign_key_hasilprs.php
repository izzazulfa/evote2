<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyHasilprs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasilprs', function (Blueprint $table) {
            $table->foreign('partai_id')->references('id')->on('partais')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasilprs', function (Blueprint $table) {
            $table->dropForeign('hasilprs_partai_id_foreign');
        });
    }
}
