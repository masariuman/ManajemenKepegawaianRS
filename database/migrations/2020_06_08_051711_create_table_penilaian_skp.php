<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenilaianSkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_skp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->enum('kategori',['Semester 1','Semester 2','Setahun']);
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('sasaran_kerja_pegawai')->nullable();
            $table->string('orientasi_pelayanan')->nullable();
            $table->string('integritas')->nullable();
            $table->string('komitmen')->nullable();
            $table->string('disiplin')->nullable();
            $table->string('kerjasama')->nullable();
            $table->string('kepemimpinan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('rata-rata')->nullable();
            $table->string('nilai_perilaku_kerja')->nullable();
            $table->string('jumlah_sasaran_kerja_pegawai')->nullable();
            $table->string('jumlah_orientasi_pelayanan')->nullable();
            $table->string('jumlah_integritas')->nullable();
            $table->string('jumlah_komitmen')->nullable();
            $table->string('jumlah_disiplin')->nullable();
            $table->string('jumlah_kerjasama')->nullable();
            $table->string('jumlah_kepemimpinan')->nullable();
            $table->string('jumlah_jumlah')->nullable();
            $table->string('jumlah_rata-rata')->nullable();
            $table->string('jumlah_nilai_perilaku_kerja')->nullable();
            $table->string('nilai_prestasi_kerja_1')->nullable();
            $table->string('nilai_prestasi_kerja_2')->nullable();
            $table->text('keberatan_pegawai')->nullable();
            $table->datetime('tanggal_keberatan_pegawai')->nullable();
            $table->text('tanggapan_pejabat')->nullable();
            $table->datetime('tanggal_tanggapan_pejabat')->nullable();
            $table->text('keputusan_atasan_pejabat')->nullable();
            $table->datetime('tanggal_keputusan_atasan_pejabat')->nullable();
            $table->text('rekomendasi')->nullable();
            $table->datetime('dibuat_tanggal_pejabat_penilai')->nullable();
            $table->datetime('diterima_tanggal_pegawai')->nullable();
            $table->datetime('diterima_tanggal_atasan_pejabat_penilai')->nullable();
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
        Schema::dropIfExists('penilaian_skp');
    }
}
