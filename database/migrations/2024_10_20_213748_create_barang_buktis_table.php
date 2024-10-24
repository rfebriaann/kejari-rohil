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
        if(!Schema::hasTable('barang_buktis')){
            Schema::create('barang_buktis', function (Blueprint $table) {
                $table->id();
                $table->foreignId('dakwaan_id')->constrained()->onDelete('cascade');
                $table->string('barang_bukti');
                $table->integer('jumlah');
                $table->string('amar_barang_bukti');
                $table->string('nomor_register_barang_bukti');
                $table->string('p48');
                $table->string('status');
                $table->timestamps();
                
                // $table->id(); // Primary key
                // $table->string('nomor_register_barang_bukti');
                // $table->text('keterangan_barang_bukti');
                // $table->unsignedBigInteger('nomor_putusan'); // Foreign key ke dakwaan

                // // Foreign key constraint
                // $table->foreign('nomor_putusan')
                //         ->references('nomor_putusan')
                //         ->on('dakwaans')
                //         ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_buktis');
    }
};
