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
    Schema::create('contests', function (Blueprint $table) {
        $table->id();
        $table->string('contest_name');
        $table->string('contest_type');
        $table->integer('number_of_judges');
        $table->integer('number_of_contestants');
        $table->string('tabulator_name');
        $table->string('logo')->nullable();
        $table->string('pageant_logo')->nullable();
        $table->enum('status', ['Active', 'Completed'])->default('Active');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contests');
    }
};
