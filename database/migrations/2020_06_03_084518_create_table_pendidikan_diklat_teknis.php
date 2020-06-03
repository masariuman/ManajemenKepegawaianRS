<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendidikanDiklatTeknis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat_teknis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama_diklat');
            $table->enum('tempat_belajar',['1','2']);
            $table->string('lokasi');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->string('jumlah_jam');
            $table->string('penyelenggara');
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
        Schema::dropIfExists('diklat_teknis');
    }
}
