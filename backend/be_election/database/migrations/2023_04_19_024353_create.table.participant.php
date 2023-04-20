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
        Schema::create('participant', function (Blueprint $table) {
            $table->id();
            $table->string("nom", 100);
            $table->string("telephone", 100)->nullable();
            $table->string("login", 100);
            $table->string("password", 100);
            $table->string("email", 30)->nullable();
            $table->string("etat", 30)->default("o");
            $table->string("cni_number", 100);
            $table->integer("age");
            $table->char("sexe")->default("M");
            $table->char("statut", 100)->default("E");
            $table->unsignedBigInteger("id_region");
            $table->foreign("id_region")->references('id')->on('region')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant');
    }
};
