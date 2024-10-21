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
        Schema::create('barang_buktis_keputusans', function (Blueprint $table) {
            $table->unsignedBigInteger('barang_bukti_id'); // Foreign key ke tabel barang_bukti
            $table->unsignedBigInteger('keputusan_id'); // Foreign key ke tabel keputusan
            // $table->foreignId('barang_bukti_id')
            //                 // ->constrained()
            //                 ->onDelete('cascade');
            // $table->foreignId('keputusan_id')
            //                 // ->constrained()
            //                 ->onDelete('cascade');
            $table->timestamps();

            // Foreign key constraints
            // $table->foreign('barang_bukti_id')->references('id')->on('barang_bukti')->onDelete('cascade');
            // $table->foreign('keputusan_id')->references('id')->on('keputusan')->onDelete('cascade');

            $table->foreign('barang_bukti_id')
                    ->references('id')
                    ->on('barang_buktis')
                    ->onDelete('cascade');
            $table->foreign('keputusan_id')
                    ->references('id')
                    ->on('keputusans')
                    ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_bukti_keputusans');
    }
};
