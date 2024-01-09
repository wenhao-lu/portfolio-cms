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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('stack1')->nullable();
            $table->string('stack2')->nullable();
            $table->string('stack3')->nullable();
            $table->string('stack4')->nullable();
            $table->string('stack5')->nullable();
            $table->string('stack6')->nullable();
            $table->string('stack7')->nullable();
            $table->string('stack8')->nullable();
            $table->string('stack9')->nullable();
            $table->string('stack10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
};
