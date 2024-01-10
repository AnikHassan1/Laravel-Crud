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
        Schema::create('Teacher', function (Blueprint $table) {
            $table->id();
            $table->Class_id();
            $table->string('name')->length(30)->nullable();
            $table->integer('Age')->length(30)->nullable();
            $table->string('Subject')->length(30)->nullable();
            $table->timestamps();
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
