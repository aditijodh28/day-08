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
        Schema::create('inspections', function (Blueprint $table) {
    $table->id();

    $table->foreignId('facility_id')
          ->constrained('facilities')
          ->cascadeOnDelete();

    $table->foreignId('user_id')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->date('inspection_date');
    $table->decimal('cleanliness_score', 5, 2);
    $table->decimal('odor_score', 5, 2);
    $table->decimal('waste_level', 5, 2);
    $table->text('remarks')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
