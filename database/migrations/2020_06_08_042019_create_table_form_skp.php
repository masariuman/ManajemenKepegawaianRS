<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormSkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_skp', function (Blueprint $table) {
            $table->id();
            $table->foreignID('skp_id')->constrained('skp');
            $table->string('kegiatan_tugas_jabatan_1')->nullable();
            $table->string('kegiatan_tugas_jabatan_2')->nullable();
            $table->string('ak')->nullable();
            $table->string('kuant_output_1')->nullable();
            $table->string('kuant_output_2')->nullable();
            $table->string('kual_mutu')->nullable();
            $table->string('biaya')->nullable();
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
        Schema::dropIfExists('form_skp');
    }
}
