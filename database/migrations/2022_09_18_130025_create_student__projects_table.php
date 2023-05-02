<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stname');
            $table->string('email');
            $table->string('number');
            $table->date('date');
            $table->string('projec_name');
            $table->string('profile_image');
            $table->string('project_image');
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
        Schema::dropIfExists('student__projects');
    }
}
