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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            
            $table->integer("teacher_id");
            $table->string("teacher_name");
            $table->string("classroom");
            $table->string("video_name");
            $table->string("video_url");
            $table->integer("purchase_count")->default(0);
            $table->integer("price");
            $table->string("status")->default("Active");
            $table->integer("max_watch");

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
        Schema::dropIfExists('videos');
    }
};
