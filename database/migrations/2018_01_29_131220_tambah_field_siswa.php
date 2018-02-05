<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahFieldSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('siswa', function($table) {
            $table->unsignedInteger('id_guru')->after('nis')->nullable();
            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function($table) {
            $table->dropColumn('id_guru');
        });
    }
}
