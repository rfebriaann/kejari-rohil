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
        Schema::create('dakwaans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_putusan');
            $table->date('tanggal_putusan');
            $table->string('pasal_didakwakan');
            $table->string('keputusan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dakwaans');
    }
};
