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
        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizzas_id')->references('id')->on('pizzas')->cascadeOnDelete();
            $table->foreignId('size_id')->references('id')->on('size')->cascadeOnDelete();
            $table->string('pizzas');
            $table->double('TotalPrice');

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
