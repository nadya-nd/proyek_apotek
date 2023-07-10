<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToPembelians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembelians', function (Blueprint $table) {
            $table  ->foreign('id_member')
                    ->references('id')
                    ->on('members')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembelians', function (Blueprint $table) {
            $table->dropForeign('pembelians_id_member_foreign');
        });
    }
}
