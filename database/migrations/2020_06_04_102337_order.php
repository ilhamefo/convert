<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->string('id_order', 64);
            $table->string('nama', 64);
            $table->string('email', 64);
            $table->string('id_isp', 12);
            $table->integer('nominal_pulsa');
            $table->string('nomor_pengirim', 64);
            $table->string('id_bank', 64);
            $table->string('atas_nama', 64);
            $table->string('nomor_rekening', 64);
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
        Schema::dropIfExists('order');
    }
}
