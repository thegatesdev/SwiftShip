<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->unsignedMediumInteger('house_no');
            $table->string('house_no_addition')->nullable();
            $table->string('postal_code');
            $table->string('city');
            
            $table->unique(['postal_code', 'city']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
