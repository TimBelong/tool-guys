<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_has_favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('user_has_purchase_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('inventory_id')->references('id')->on('inventories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_has_purchase_items');
        Schema::dropIfExists('user_has_favorites');
    }
};

