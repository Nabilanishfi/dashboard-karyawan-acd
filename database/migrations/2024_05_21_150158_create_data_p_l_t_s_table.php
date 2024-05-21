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
        Schema::create('data_p_l_t_s', function (Blueprint $table) {
            $table->bigInteger('nik')->unsigned();
            $table->string('name');
            $table->string('jabatan_existing');
            $table->string('jabatan_usulan_plt');
            $table->string('jabatan_usulan_plh');
            $table->text('periode_plt');
            $table->text('periode_plh');
            $table->string('nodin_spr');
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
        Schema::dropIfExists('data_p_l_t_s');
    }
};
