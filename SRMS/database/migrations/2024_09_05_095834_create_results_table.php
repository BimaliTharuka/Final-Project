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
        Schema::create('results', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // Foreign key to 'courses' table
            $table->foreignId('batch_id')->constrained('batches')->onDelete('cascade'); // Foreign key to 'batches' table
            $table->foreignId('type_id')->constrained('result_types')->onDelete('cascade'); // Foreign key to 'result_types' table
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key to 'students' table
            $table->decimal('marks', 5, 2); // Column for marks (e.g., 95.50)
            $table->timestamps(); // Adds 'created_at' and 'updated_at' timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
