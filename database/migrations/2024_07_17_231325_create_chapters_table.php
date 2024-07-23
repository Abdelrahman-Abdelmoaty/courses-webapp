<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('course_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('canonical')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
