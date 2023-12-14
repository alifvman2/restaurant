<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembeli');
            $table->unsignedBigInteger('makanan');
            $table->date('tgl');
            $table->string('jumlah');
            $table->string('total');
            $table->string('status')->default('Undone');
            $table->timestamps();

            $table->foreign('pembeli')->references('id')->on('pembelis');
            $table->foreign('makanan')->references('id')->on('makanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
