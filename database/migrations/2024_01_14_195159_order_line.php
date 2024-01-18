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
           // DO NOT ADD here $table->increments('id');
            $table->bigInteger('quantity');
            $table->foreignId('pizzas_id')->references('id')->on('pizzas');
            $table->foreignId('order_id')->references('id')->on('orders');

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
