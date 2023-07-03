<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('id_pembelian');
            $table->string('id_detail_pembelian');
            $table->date('tgl_pembelian');
            $table->date('estimasi_obat_habis');
            $table->decimal('subtotal_harga', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembelian');
    }
}
