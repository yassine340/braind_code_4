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
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecon_id');
            $table->string('titre');
            $table->string('url')->nullable();
            $table->json('type');
            $table->text('contenu')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('lecon_id')->references('id')->on('lecons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressources');
    }
};
