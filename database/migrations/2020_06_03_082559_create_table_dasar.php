<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDasar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dasar', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('eselon_1')->nullable();
            $table->string('eselon_2')->nullable();
            $table->string('eselon_3')->nullable();
            $table->string('eselon_4')->nullable();
            $table->string('nip_baru')->nullable();
            $table->string('nip_lama')->nullable();
            $table->string('nama_pegawai')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->datetime('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin',['P','W']);
            $table->enum('status_keluarga',['K','B','D','J']);
            $table->integer('agama')->nullable();
            $table->string('pendidikan_akhir')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('jurusan_prodi')->nullable();
            $table->integer('status_kepegawaian')->nullable();
            $table->string('instansi_asal')->nullable();
            $table->datetime('tmt_cpns')->nullable();
            $table->string('nama_jabatan')->nullable();
            $table->string('nomor_karpeg')->nullable();
            $table->integer('taspen')->nullable();
            $table->string('nomor_npwp')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->string('kota')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('str')->nullable();
            $table->datetime('str')->nullable();
            $table->string('sikp')->nullable();
            $table->datetime('sikp')->nullable();
            $table->string('spk')->nullable();
            $table->datetime('spk')->nullable();
            $table->string('rkk')->nullable();
            $table->datetime('rkk')->nullable();
            $table->foreignID('ruangan_id')->constrained('ruangan');
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
        Schema::dropIfExists('dasar');
    }
}
