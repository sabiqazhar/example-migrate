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
        Schema::create('getart_project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id');
            $table->text('address_project');
            $table->integer('raw_size');
            $table->bigInteger('ready_budget');
            $table->string('design', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('getart_project');
    }
};
