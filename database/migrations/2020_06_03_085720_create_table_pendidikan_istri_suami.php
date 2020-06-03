<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendidikanIstriSuami extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istri_suami', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama')->nullable();
            $table->string('nomor_karis_karsu');
            $table->datetime('tanggal_lahir');
            $table->datetime('tanggal_nikah');
            $table->string('tingkat_pendidikan');
            $table->string('pekerjaan');
            $table->integer('status_suami_istri');
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
        Schema::dropIfExists('istri_suami');
    }
}
