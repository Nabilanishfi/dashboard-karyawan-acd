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
        Schema::create('karyawan_organiks', function (Blueprint $table) {
            $table->bigInteger('pers_no')->unsigned()->unique();
            $table->string('name');
            $table->string('emp_group');
            $table->string('emp_subgroup');
            $table->string('org_unit');
            $table->string('position');
            $table->integer('ps_group');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('gender');
            $table->string('tingkat_pendidikan');
            $table->string('birth_place');
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
        Schema::dropIfExists('karyawan_organiks');
    }
};
