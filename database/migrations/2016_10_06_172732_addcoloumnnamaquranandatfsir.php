<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addcoloumnnamaquranandatfsir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qurans', function (Blueprint $table) {
             $table->string('nama_surat')->after('surat_id');
             $table->string('tafsir')->after('tafsir_id');
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
