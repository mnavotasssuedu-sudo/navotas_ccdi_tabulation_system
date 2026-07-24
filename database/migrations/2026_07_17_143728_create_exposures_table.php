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
 Schema::create('exposures', function (Blueprint $table) {
    $table->id();
    $table->string('exposure_name');
    $table->integer('order');
    $table->boolean('is_final')->default(false);
    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposures');
    }
};
