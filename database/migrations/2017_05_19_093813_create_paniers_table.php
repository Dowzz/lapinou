<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->increments('Ncommande');
            $table->text('couverture');
            $table->text('titre');
            $table->text('auteur');
            $table->text('format');
            $table->text('prix');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paniers');
    }
}
