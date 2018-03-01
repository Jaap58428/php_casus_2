<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCijfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cijfers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedDecimal('cijfer', 4, 2);
            $table->string('module_code');
            $table->string('user_student_nummer');
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cijfers');
    }
}
