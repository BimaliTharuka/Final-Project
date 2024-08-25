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
            Schema::table('users', function (Blueprint $table) {
                $table->enum('role', ['Admin', 'Lecturer', 'Student'])->after('password')->nullable();
                $table->string('user_image')->nullable()->after('role');
                $table->string('department', 100)->nullable()->after('user_image');
                $table->string('course', 100)->nullable()->after('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['role', 'user_image', 'department', 'course']);
        });
    }
};
