<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToDetailObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_obat', function (Blueprint $table) {
            $table  ->foreign('id_obat')
                    ->references('id')
                    ->on('obats')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table  ->foreign('id_member')
                    ->references('id')
                    ->on('members')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table  ->foreign('id_detail_pembelian')
                    ->references('id')
                    ->on('detail_pembelian')
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
        Schema::table('detail_obat', function (Blueprint $table) {
            $table->dropForeign('detail_obat_id_obat_foreign');
            $table->dropForeign('detail_obat_id_member_foreign');
            $table->dropForeign('detail_obat_id_detail_pembelian_foreign');
        });
    }
}
