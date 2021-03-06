<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->increments('id');
            $table->text('couverture');
            $table->text('titre');
            $table->text('auteur');
            $table->text('editeur');
            $table->date('parution');
            $table->text('description');
            $table->text('genre');
            $table->text('format');
            $table->integer('notes')->default('0');
            $table->double('prix');
            $table->text('link')->default('0');
            $table->rememberToken();
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
        Schema::drop('livres');
    }
}
