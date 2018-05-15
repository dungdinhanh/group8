<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('course_id');
//<<<<<<< HEAD
//            //$table->string('title', 1000);
//=======
//>>>>>>> 4a8f171c2a5339074ddd9dbe1f64ac962fe0cf27
            $table->text('content');
            $table->string('note', 10000)->nullable();
            $table->integer('overtime');
            $table->unsignedInteger('homework_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('homework_id')->references('id')->on('homework')->onDelete('cascade');
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
        Schema::dropIfExists('submissions');
    }
}
