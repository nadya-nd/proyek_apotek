<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToDetailPembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pembelian', function (Blueprint $table) {
            $table  ->foreign('id_pembelian')
                    ->references('id')
                    ->on('pembelians')
                    ->onUpdate('cascade')
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
        Schema::table('detail_pembelian', function (Blueprint $table) {
            $table->dropForeign('detail_pembelian_id_pembelian_foreign');
        });
    }
}
