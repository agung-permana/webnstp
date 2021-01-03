<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotspotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotspot', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scene_id')->unsigned();
            $table->integer('yaw');
            $table->enum('pitch', ['box', 'sphere', 'cylinder']);
            $table->string('to_scene_id', 100);
            $table->string('popover_show');
            $table->string('popover_content');
            $table->timestamps();
        });

        Schema::table('hotspot', function (Blueprint $table) {
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
        Schema::dropIfExists('hotspot');
    }
}
