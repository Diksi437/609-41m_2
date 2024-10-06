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
        Schema::create('movie_screening', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies')->onDelete('cascade');
            $table->foreignId('screening_id')->constrained('screenings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movie_screening');
    }
};
