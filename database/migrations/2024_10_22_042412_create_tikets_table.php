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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pertandingans_id');
            $table->integer('nomor_kursi');
            $table->string('kategori');
            $table->string('harga');
            $table->integer('stok');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('pertandingans_id')->references('id')->on('pertandingans')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
