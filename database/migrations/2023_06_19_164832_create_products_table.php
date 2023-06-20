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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->text('body')->default(null);
            $table->string('price')->default(null);
            $table->text('address')->default(null);
            $table->string('image')->default(null);
            $table->text('images')->default(null);
            $table->enum('status', ['accept', 'unaccept'])->default(null);








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
