<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImages extends Migration
{


    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('display_name');
            $table->string('file_name');
            $table->string('mime_type');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}
