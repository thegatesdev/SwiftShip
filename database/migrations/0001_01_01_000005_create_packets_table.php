<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packets', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('packet_type_id')->constrained();
            $table->foreignId('receiver_address_id')->constrained('addresses');
            $table->string('receiver_region');
            $table->string('receiver_email');
            $table->boolean('is_mailbox');
            $table->boolean('needs_signature');
            $table->unsignedSmallInteger('warehouse_location');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packets');
    }
};
