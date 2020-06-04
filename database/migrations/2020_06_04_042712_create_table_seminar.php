<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSeminar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama_kegiatan');
            $table->string('lokasi');
            $table->integer('tempat_kegiatan');
            $table->string('penyelenggara');
            $table->string('tahun_seminar');
            $table->integer('kedudukan_dalam_seminar');
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
        Schema::dropIfExists('seminar');
    }
}
