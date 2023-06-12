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
        Schema::create('kelola_barangs', function (Blueprint $table) {

            $table->integer('id_item')->primary();
            $table->String('nama_item', 20)->nullable();
            $table->integer('stok')->nullable();
            $table->String('jenis',20)->nullable();
            $table->integer('harga')->nullable();
            $table->string('gambar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelola_barangs');
    }
};
