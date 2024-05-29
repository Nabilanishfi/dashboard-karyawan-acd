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
        Schema::create('data_plts', function (Blueprint $table) {
            $table->bigInteger('nik')->unsigned()->unique();
            $table->string('name');
            $table->foreignId('jabatan_existing');
            $table->foreignId('jabatan_usulan_plt');
            $table->foreignId('jabatan_usulan_plh');
            $table->date('awal_plt')->nullable();
            $table->date('akhir_plt')->nullable();
            $table->date('awal_plh')->nullable();
            $table->date('akhir_plh')->nullable();
            $table->string('nodin_spr')->nullable();
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
        Schema::dropIfExists('data_plts');
    }
};
