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
        Schema::table('recipe_ingredients', function (Blueprint $table) {
            $table->dropColumn(['quantity_one', 'quantity_two', 'quantity_three', 'quantity_four']);
            $table->string('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipe_ingredients', function (Blueprint $table) {
            $table->dropColumn(['quantity']);
            $table->string('quantity_one');
            $table->string('quantity_two');
            $table->string('quantity_three');
            $table->string('quantity_four');
        });
    }
};
