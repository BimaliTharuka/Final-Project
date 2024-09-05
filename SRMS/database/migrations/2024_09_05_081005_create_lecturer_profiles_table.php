<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturerProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('lecturer_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_with_initials')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->date('join_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecturer_profiles');
    }
}
