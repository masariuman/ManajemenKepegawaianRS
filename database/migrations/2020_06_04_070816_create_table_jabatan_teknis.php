<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJabatanTeknis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_teknis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama_jabatan');
            $table->datetime('tmt_jabatan');
            $table->datetime('tahun_mulai');
            $table->datetime('tahun_selesai');
            $table->string('nomor_sk');
            $table->datetime('tanggal_sk');
            $table->string('nip_penjabat_penandatangan_sk');
            $table->string('nip_lama_penjabat_penandatangan_sk');
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
        Schema::dropIfExists('jabatan_teknis');
    }
}
