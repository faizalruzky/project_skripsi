<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTfidfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tfidfs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('term');
            $table->integer('quran_id');
            $table->double('idf');
            $table->double('w');
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
        Schema::drop('tfidfs');
    }
}
