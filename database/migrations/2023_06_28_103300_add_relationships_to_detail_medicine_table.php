<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToDetailMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_medicine', function (Blueprint $table) {
            $table  ->foreign('medicine_id')
                    ->references('id')
                    ->on('medicines')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table  ->foreign('member_id')
                    ->references('id')
                    ->on('members')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
            $table  ->foreign('detail_transaction_id')
                    ->references('id')
                    ->on('detail_transaction')
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
        Schema::table('detail_medicine', function (Blueprint $table) {
            $table->dropForeign('detail_medicine_medicine_id_foreign');
            $table->dropForeign('detail_medicine_member_id_foreign');
            $table->dropForeign('detail_medicine_detail_transaction_id_foreign');
        });
    }
}
