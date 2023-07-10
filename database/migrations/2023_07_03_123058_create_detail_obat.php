<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_obat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_member");
            $table->unsignedBigInteger("id_obat");
            $table->unsignedBigInteger("id_pembelian");
            $table->unsignedBigInteger("id_detail_pembelian");
            $table->date("tgl_dipesan");
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
        Schema::dropIfExists('detail_obat');
    }
}
