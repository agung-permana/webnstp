<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSceneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scene', function (Blueprint $table) {
            $table->id();
            $table->string('scene_id', 100);
            $table->integer('zoom');
            $table->enum('type', ['box', 'sphere', 'cylinder']);
            $table->string('title');
            $table->string('thumb_image');
            $table->string('image');
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
        Schema::dropIfExists('scene');
    }
}
