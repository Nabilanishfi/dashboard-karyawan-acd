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
        Schema::create('turn_over_t_p_p_s', function (Blueprint $table) {
            $table->string('nip')->unique();
            $table->string('name');
            $table->string('area');
            $table->string('fungsi');
            $table->string('unit_kerja');
            $table->string('pendidikan');
            $table->date('masuk');
            $table->date('keluar');
            $table->string('keterangan');
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
        Schema::dropIfExists('turn_over_t_p_p_s');
    }
};
