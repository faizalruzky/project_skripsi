<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Changedatatypetafsirandaddarabquran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qurans', function (Blueprint $table) {
            $table->text('arab_quran')->after('nama_surat');
            $table->dropColumn('tafsir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qurans', function (Blueprint $table) {
            //
        });
    }
}
