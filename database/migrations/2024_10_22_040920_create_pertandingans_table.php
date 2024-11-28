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
        Schema::create('pertandingans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boxer1_id');
            $table->unsignedBigInteger('boxer2_id');
            $table->unsignedBigInteger('wasits_id');
            $table->date('tanggal_pertandingan');
            $table->time('jam_pertandingan');
            $table->string('hasil_pertandingan');
            $table->text('lokasi');
            $table->string('image');
            $table->timestamps();

            // Foreign key for boxer 1
            $table->foreign('boxer1_id')->references('id')->on('boxers')->onDelete('cascade');
            // Foreign key for boxer 2
            $table->foreign('boxer2_id')->references('id')->on('boxers')->onDelete('cascade');
            // Foreign key for wasit
            $table->foreign('wasits_id')->references('id')->on('wasits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertandingans');
    }
};
