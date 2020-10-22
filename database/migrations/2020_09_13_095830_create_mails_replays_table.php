<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsReplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('mails_replays', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('massage_id');
            $table->text('text');
            $table->timestamps();
            $table->foreign('massage_id')->references('id')->on('mails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_replays');
    }
}
