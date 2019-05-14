<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyHasiljks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasiljks', function (Blueprint $table) {
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
        Schema::table('hasiljks', function (Blueprint $table) {
            $table->dropForeign('hasiljks_partai_id_foreign');
        });
    }
}
