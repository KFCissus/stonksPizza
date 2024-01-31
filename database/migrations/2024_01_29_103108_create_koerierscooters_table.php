<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('koerierscooters', function (Blueprint $table) {
            $table->id();
            $table->string('scooter');
            $table->string('status')->default('Ingecheckt');
            $table->text('schade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('koerierscooters');
    }
};
