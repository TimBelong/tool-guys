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
        Schema::table('user_has_purchase_items', function (Blueprint $table) {
            $table->integer('rental_days')->default(1)->after('inventory_id');
            $table->date('start_date')->nullable()->after('rental_days');
            $table->date('end_date')->nullable()->after('start_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_has_purchase_items', function (Blueprint $table) {
            $table->dropColumn(['rental_days', 'start_date', 'end_date']);
        });
    }
};
