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
        Schema::create('services_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->constrained('orders')->onUpdate('cascade')->onDelete('cascade');
            $table->morphs('serviceable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_orders');
    }
};
