<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Librairie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librairie', function (Blueprint $table) {
            $table->increments('id');
            $table->char('titre');
            $table->text('couverture');
            $table->char('auteur');
            $table->text('description');
            $table->char('genre');
            $table->date('parution');
            $table->text('format');
            $table->char('editeur');
            $table->integer('prix');
            $table->integer('note');
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
        Schema::drop('librairie');
    }
}
