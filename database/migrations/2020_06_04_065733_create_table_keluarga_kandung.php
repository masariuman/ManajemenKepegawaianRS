<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKeluargaKandung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga_kandung', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama');
            $table->integer('hubungan');
            $table->string('pekerjaan');
            $table->datetime('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->enum('kondisi',['1','0']);
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
        Schema::dropIfExists('keluarga_kandung');
    }
}
