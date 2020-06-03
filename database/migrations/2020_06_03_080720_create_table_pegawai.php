<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('eselon_1');
            $table->string('eselon_2');
            $table->string('eselon_3');
            $table->string('eselon_4');
            $table->string('nip_baru');
            $table->string('nip_lama');
            $table->string('nama_pegawai');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('tempat_lahir');
            $table->datetime('tanggal_lahir');
            $table->enum('jenis_kelamin',['P','W']);
            $table->enum('status_keluarga',['K','B','D','J']);
            $table->integer('agama');
            $table->string('pendidikan_akhir');
            $table->string('nama_sekolah');
            $table->string('tahun_lulus');
            $table->string('jurusan_prodi');
            $table->integer('status_kepegawaian');
            $table->string('instansi_asal');
            $table->datetime('tmt_cpns');
            $table->string('nama_jabatan');
            $table->string('nomor_karpeg');
            $table->integer('taspen');
            $table->string('nomor_npwp');
            $table->text('alamat_rumah');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('str');
            $table->datetime('str');
            $table->string('sikp')
            $table->datetime('sikp');;
            $table->string('spk');
            $table->datetime('spk');
            $table->string('rkk');
            $table->datetime('rkk');
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
        Schema::dropIfExists('pegawai');
    }
}
