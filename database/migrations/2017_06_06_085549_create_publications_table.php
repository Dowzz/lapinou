<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->text('couverture');
            $table->text('titre');
            $table->text('auteur');
            $table->text('editeur');
            $table->date('parution');
            $table->text('description');
            $table->text('genre');
            $table->integer('notes')->default('0');
            $table->text('format');
            $table->double('prix');
            $table->text('link')->default('0');
            $table->integer('publiable')->default('0');
            $table->text('user');
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
        Schema::drop('publications');
    }
}
