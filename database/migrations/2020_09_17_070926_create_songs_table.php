<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
           $table->id();
             $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('album_id');
            $table->text('title');
            $table->text('duration');
            $table->text('play');
            
            $table->timestamps();
            $table->foreign('artist_id')
                  ->references('id')->on('artists')
                  ->onDelete('cascade'); 
            $table->foreign('album_id')
                  ->references('id')->on('albums')
                  ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
