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
    Schema::create('contestants', function (Blueprint $table) {
        $table->id();
        $table->string('contestant_no');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('course');
        $table->string('gender');
        $table->string('photo')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contestants');
    }
};
