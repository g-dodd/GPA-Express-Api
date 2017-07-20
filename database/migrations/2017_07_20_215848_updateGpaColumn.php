<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGpaColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // We need to use the 'students' table so that we can modify the GPA column
        Schema::table('students', function (Blueprint $table) {
            $table->decimal('gpa', 3, 2)->change(); // Original I thought an unsigned integer would work. I found that a decimal type would be better for this type of storage.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedInteger('gpa')->change(); // We reverse the change when running a reverse migration
        });
    }
}
