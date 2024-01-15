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
        Schema::create('Order_line', function (Blueprint $table) {

            $table->foreignId('pizzas_id')->references('id')->on('pizzas')->cascadeOnDelete();
            $table->foreignId('size_id')->references('id')->on('size')->cascadeOnDelete();
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
