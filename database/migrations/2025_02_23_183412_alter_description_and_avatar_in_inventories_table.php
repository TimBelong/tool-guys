<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->text('avatar')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->string('description', 255)->nullable()->change();
            $table->string('avatar', 255)->nullable()->change();
        });
    }
};

