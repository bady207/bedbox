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
        Schema::create('boxers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('weight_class');
            $table->string('negara');
            $table->unsignedBigInteger('pelatihs_id');
            $table->string('win');
            $table->string('lose');
            $table->string('image');
            $table->timestamps();

            $table->foreign('pelatihs_id')->references('id')->on('pelatihs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boxers');
    }
};
