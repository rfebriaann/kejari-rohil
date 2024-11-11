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
                $table->timestamps();
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
