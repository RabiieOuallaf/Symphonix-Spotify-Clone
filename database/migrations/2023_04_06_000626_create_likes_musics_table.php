<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesMusicsTable extends Migration
{
    public function up()
    {
        Schema::create('likes_musics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('likes_id');
            $table->unsignedBigInteger('music_id');
            $table->timestamps();
            
            $table->foreign('likes_id')->references('id')->on('likes')->onDelete('cascade');
            $table->foreign('music_id')->references('id')->on('musics')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes_musics');
    }
}
