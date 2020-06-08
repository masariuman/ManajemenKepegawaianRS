<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormPerilakuKerjaSkp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perilaku_kerja_skp', function (Blueprint $table) {
            $table->id();
            $table->foreignID('skp_id')->constrained('skp');
            $table->string('orientasi_pelayanan')->nullable();
            $table->string('integritas')->nullable();
            $table->string('komitmen')->nullable();
            $table->string('disiplin')->nullable();
            $table->string('kerjasama')->nullable();
            $table->string('kepemimpinan')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('rata-rata')->nullable();
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
        Schema::dropIfExists('perilaku_kerja_skp');
    }
}
