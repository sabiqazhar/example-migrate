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
        Schema::table('getart_project', function (Blueprint $table) {
            $table->foreign('personal_id', 'fk_personal_id_to_getart')->references('id')->on('getart')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('getart_project', function (Blueprint $table) {
            Schema::dropForeign('fk_personal_id_to_getart');
        });
    }
};
