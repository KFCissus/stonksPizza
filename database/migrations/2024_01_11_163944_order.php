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
            $table->string('session');
            $table->timestamp('date');
            $table->foreignId('size_id')->references('id')->on('PizzaSize');

       //     $table->double('TotalPrice');

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
