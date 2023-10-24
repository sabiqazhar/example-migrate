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
        Schema::create('getart', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('email', 25);
            $table->string('phone', 25);
            $table->integer('age');
            $table->string('jobs', 50);
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('getart');
    }
};
