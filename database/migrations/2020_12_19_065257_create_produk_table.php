<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('nama');
            $table->text('desc_produk');
            $table->string('unit_kerja');
            $table->string('nama_peneliti');
            $table->string('status_haki')->nulablle();
            $table->string('mitra_kerja')->nullable();
            $table->string('trl')->nullable();
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::table('produk', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('produk_kategori')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
