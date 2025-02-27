<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('rent_in_hand_id');
            $table->bigInteger('parent_id')->nullable();
            $table->string('title');
            $table->integer('count_inventory')->nullable();
            $table->float('sum_deposit')->nullable();
            $table->float('prices')->nullable();
            $table->float('discounts')->nullable();
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->integer('rent_in_hand_id');
            $table->string('title')->nullable();
            $table->string('const')->nullable();
            $table->boolean('is_system_status')->nullable();
            $table->string('color')->nullable();
            $table->string('text_color')->nullable();
            $table->timestamps();
        });

        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('rent_in_hand_id');
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('place_text')->nullable();
            $table->timestamps();
        });

        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('rent_in_hand_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title')->nullable();
            $table->text('avatar')->nullable();
            $table->unsignedInteger('article_number')->nullable();
            $table->text('description')->nullable();
            $table->integer('rent_number')->nullable();
            $table->date('buy_date')->nullable();
            $table->float('buy_price')->nullable();
            $table->float('amount_rent_sum')->nullable();
            $table->float('cash_deposit')->nullable();
            $table->foreignId('option_id')->nullable()->constrained('options')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->constrained('states')->onDelete('cascade');
            $table->foreignId('point_id')->nullable()->constrained('points')->onDelete('cascade');
            $table->float('discounts')->nullable();
            $table->integer('another')->nullable();
            $table->integer('children_count')->nullable();
            $table->integer('sum_amount_payment')->nullable();
            $table->boolean('is_group')->nullable();
            $table->foreignId('children_id')->nullable()->constrained('children')->onDelete('cascade');
            $table->boolean('services')->nullable();
            $table->boolean('is_occupied')->nullable();
            $table->integer('count-rents')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventories');
        Schema::dropIfExists('children');
        Schema::dropIfExists('points');
        Schema::dropIfExists('states');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('options');
    }
};
