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
        Schema::create('filiere_module', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('filiere_id');
            $table->bigInteger('module_id');
            $table->foreign('filiere_id')->references('id')->on('filieres');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filiere_modules');
    }
};
