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
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->unsignedBigInteger("id_participant");
            $table->foreign("id_participant")->references('id')->on('participant')->onDelete("cascade");
            $table->unsignedBigInteger("id_bulletin");
            $table->foreign("id_bulletin")->references('id')->on('bulletin')->onDelete("cascade");
            $table->unsignedBigInteger("id_election");
            $table->foreign("id_election")->references('id')->on('election')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
};
