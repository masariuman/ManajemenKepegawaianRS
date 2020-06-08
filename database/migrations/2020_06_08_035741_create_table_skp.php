<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->enum('kategori',['semester 1','semester 2','setahun']);
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama_pejabat_penilai')->nullable();
            $table->string('nip_pejabat_penilai')->nullable();
            $table->string('pangkat_golongan_ruang_penilai')->nullable();
            $table->string('jabatan_penilai')->nullable();
            $table->string('unit_kerja_penilai')->nullable();
            $table->string('nama_atasan_pejabat_penilai')->nullable();
            $table->string('nip_atasan_pejabat_penilai')->nullable();
            $table->string('pangkat_golongan_ruang_atasan_penilai')->nullable();
            $table->string('jabatan_atasan_penilai')->nullable();
            $table->string('unit_kerja_atasan_penilai')->nullable();
            $table->enum('active',['1','0']);
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
        Schema::dropIfExists('skp');
    }
}
