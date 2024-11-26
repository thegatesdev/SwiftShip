<?php

use App\Data\PackageStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packet_updates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignUlid('packet_id')->constrained();
            $table->enum('status', array_column(PackageStatus::cases(), 'value')); // TODO

            $table->unique(['packet_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packet_updates');
    }
};
