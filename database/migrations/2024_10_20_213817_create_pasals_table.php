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
        if(!Schema::hasTable('pasals')){
            Schema::create('pasals', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->string('pasal_didakwakan');
                $table->unsignedBigInteger('nomor_putusan'); // Foreign key dari dakwaan
                // $table->foreignId('nomor_putusan_id')
                //                 ->onDelete('cascade');
                $table->timestamps();

                // Foreign key constraints
                // $table->foreign('nomor_putusan')->references('nomor_putusan')->on('dakwaan')->onDelete('cascade');
                $table->foreign('nomor_putusan')
                        ->references('nomor_putusan')
                        ->on('dakwaans')
                        ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasals');
    }
};
