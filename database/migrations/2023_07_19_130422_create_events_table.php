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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camera_id')->references('id')->on('cameras')->onDelete('cascade');
            $table->foreignId('event_type_id')->references('id')->on('event_types')->onDelete('cascade');
            $table->string('frame_url');
            $table->timestamp('creationDate')->nullable();
            $table->timestamp('deletionDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
