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
        Schema::table('dbposts12', function (Blueprint $table) {
            $table->bigInteger('id')->after('FIO')->change();
            $table->integer('age')->first()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dbposts12', function (Blueprint $table) {
            $table->bigInteger('id')->first()->change();
            $table->integer('age')->after('updated_at')->change();
        });
    }
};
