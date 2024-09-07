<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // Foreign key to the students table
            $table->string('medical_condition'); 
            $table->date('submission_date')->nullable(); 
            $table->string('medical_report_path'); // Path to the uploaded medical report
            $table->string('status')->default('pending'); 
            $table->timestamps(); 

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_submissions');
    }
};
