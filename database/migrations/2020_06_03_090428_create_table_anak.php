<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->foreignID('pegawai_id')->constrained('pegawai');
            $table->string('nama');
            $table->enum('jenis_kelamin',['P','W']);
            $table->string('tempat_lahir');
            $table->datetime('tanggal_lahir');
            $table->integer('status_anak');
            $table->string('pendidikan');
            $table->string('pekerjaan');
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
        Schema::dropIfExists('anak');
    }
}
