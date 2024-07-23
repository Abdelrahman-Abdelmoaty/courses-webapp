<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('chapter_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('url');
            $table->integer('duration');
            $table->string('canonical')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
