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
        Schema::create('marketing_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id'); // Relasi ke tabel teams
            $table->string('facility_name');
            $table->integer('cost');
            $table->timestamps();
    
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing_data');
    }
};
