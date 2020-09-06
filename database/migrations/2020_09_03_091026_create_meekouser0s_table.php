<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeekouser0sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meekouser0s', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nom');
          $table->string('prenom');
          $table->string('email');
          $table->string('motdepass');
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
        Schema::dropIfExists('meekouser0s');
    }
}
