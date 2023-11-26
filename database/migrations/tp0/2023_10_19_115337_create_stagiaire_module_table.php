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
        Schema::create('stagiaire_module', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id');
            $table->bigInteger('stagiaire_id');
            
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaire_modules');
    }
};
