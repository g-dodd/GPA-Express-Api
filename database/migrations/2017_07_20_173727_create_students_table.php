<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // We need to create a table based on the Student model. The Schema command helps us get this done.
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id'); // An incrementing integer that represents the id of the entry and is used as the primary key
            $table->string('first_name'); // The first name of the student
            $table->string('last_name'); // The last name of the student
            $table->date('dob'); // The date of birth of the student. We use a DATE type to store this value
            $table->unsignedInteger('gpa'); // The grade point average of the student. We use an unsigned integer for the value
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // We drop the entire table when we reverse the migration
        Schema::dropIfExists('students');
    }
}
