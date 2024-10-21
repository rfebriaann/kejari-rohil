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
        
        Schema::create('dakwaan_terdakwas', function (Blueprint $table) {
            $table->unsignedBigInteger('terdakwa_id'); // Foreign key ke tabel terdakwa
            $table->unsignedBigInteger('nomor_putusan'); // Foreign key ke tabel dakwaan
            $table->timestamps();

            // Foreign key constraints
            // $table->foreign('terdakwa_id')->references('id')->on('terdakwa')->onDelete('cascade');
            // $table->foreign('nomor_putusan')->references('nomor_putusan')->on('dakwaan')->onDelete('cascade');
            $table->foreign('terdakwa_id')
                    ->references('id')
                    ->on('terdakwas')
                    ->onDelete('cascade');
            $table->foreign('nomor_putusan')
                    ->references('nomor_putusan')
                    ->on('dakwaans')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dakwaan_terdakwas');
    }
};
