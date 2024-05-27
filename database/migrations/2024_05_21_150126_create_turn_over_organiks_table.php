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
        Schema::create('turn_over_organiks', function (Blueprint $table) {
            $table->bigInteger('nip')->unsigned()->unique();
            $table->string('name');
            $table->string('area');
            $table->string('fungsi');
            $table->string('unit_kerja');
            $table->date('rotasi_antar_unit')->nullable();
            $table->date('masuk')->nullable();
            $table->date('keluar')->nullable();
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
        Schema::dropIfExists('turn_over_organiks');
    }
};
