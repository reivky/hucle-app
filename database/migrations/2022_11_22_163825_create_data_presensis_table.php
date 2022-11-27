<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan');
            $table->foreignId('id_master_shift');
            $table->string('jam_masuk');
            $table->string('jam_pulang');
            $table->string('tanggal');
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
        Schema::dropIfExists('data_presensis');
    }
};
