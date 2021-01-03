<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scene_id')->unsigned();
            $table->string('object_name');
            $table->string('object_file');
            $table->string('slug');
            $table->text('spesifikasi');
            $table->text('deskripsi');
            $table->string('alt_name');
            $table->string('auto_rotate');
            $table->string('camera_controls');
            $table->string('background_color');
            $table->timestamps();
        });

        Schema::table('object', function (Blueprint $table) {
            $table->foreign('scene_id')->references('id')->on('scene');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object');
    }
}
