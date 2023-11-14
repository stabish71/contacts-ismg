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
        Schema::create('job_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique()->index();
            $table->timestamps();
        });

        // Insert predefined values
        DB::table('job_titles')->insert([
            ['title' => 'CEO', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'CIO', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'CTO', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'DEV', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'MNG', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_titles');
    }
};
