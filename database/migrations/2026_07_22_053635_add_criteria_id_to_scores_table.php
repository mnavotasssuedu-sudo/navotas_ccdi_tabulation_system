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
    Schema::table('scores', function (Blueprint $table) {

      $table->foreignId('criteria_id')
      ->after('contestant_id')
      ->constrained('criteria')
      ->onDelete('cascade');

    });
}

    /**
     * Reverse the migrations.
     */
  public function down(): void
{
    Schema::table('scores', function (Blueprint $table) {

        $table->dropForeign(['criteria_id']);
        $table->dropColumn('criteria_id');

    });
}
};
