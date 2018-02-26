<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCijfer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('cijfers', function ($table)
      {
        $table->foreign('module_code')->references('code')->on('module');
        $table->foreign('user_student_nummer')->references('student_nummer')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('cijfers', function ($table)
      {
        $table->dropForeign(['module_code', 'user_student_nummer']);
      });
    }
}
