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
        Schema::create('turn_over_tpps', function (Blueprint $table) {
            $table->string('nip')->unique();
            $table->string('name');
            $table->foreignId('area_id');
            $table->foreignId('fungsi_id');
            $table->foreignId('unit_kerja_id');
            $table->string('pendidikan');
            $table->date('masuk')->nullable();
            $table->date('keluar')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('turn_over_tpps');
    }
};