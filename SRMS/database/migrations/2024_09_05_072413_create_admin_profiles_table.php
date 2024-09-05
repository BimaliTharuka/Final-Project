<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_with_initials')->nullable();
            $table->string('contact_number');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('department');
            $table->string('position');
            $table->date('join_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_profiles');
    }
}

