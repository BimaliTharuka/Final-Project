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
        Schema::create('result_types', function (Blueprint $table) {
            
            $table->id(); // Auto-incrementing primary key
            $table->string('type_name'); // Column for the type name (e.g., Exam, Quiz)
            $table->timestamps(); // Adds 'created_at' and 'updated_at' timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_types');
    }
};
