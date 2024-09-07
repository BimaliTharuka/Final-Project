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
        Schema::table('admission_requests', function (Blueprint $table) {
            // Drop the current foreign key
            $table->dropForeign(['exam_id']);

          
            
            // Re-add the foreign key with onDelete cascade
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');

            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
