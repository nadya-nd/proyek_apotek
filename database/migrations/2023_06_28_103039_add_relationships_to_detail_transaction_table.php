<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToDetailTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_transaction', function (Blueprint $table) {
            $table  ->foreign('transaction_id')
                    ->references('id')
                    ->on('transactions')
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
        Schema::table('detail_transaction', function (Blueprint $table) {
            $table->dropForeign('detail_transaction_transaction_id_foreign');
        });
    }
}
