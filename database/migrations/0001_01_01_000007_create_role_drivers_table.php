<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('role_drivers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->string('region');

            $table->unique(['user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role_drivers');
    }
};
