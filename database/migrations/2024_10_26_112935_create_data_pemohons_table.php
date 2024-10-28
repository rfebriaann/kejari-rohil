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
        if(!Schema::hasTable('data_pemohons')){
            Schema::create('data_pemohons', function (Blueprint $table) {
                $table->id();
                $table->date('tanggal_pengambilan');
                $table->foreignId('terdakwa_id')->constrained('terdakwa')->onDelete('cascade'); // Pastikan nama tabel sesuai
                $table->string('nama_pemohon');
                $table->string('nik', 16);
                $table->string('tempat_lahir');
                $table->date('tanggal_lahir');
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                $table->text('alamat');
                $table->string('agama');
                $table->string('status_perkawinan');
                $table->string('pekerjaan');
                $table->string('nomor_hp', 15);
                $table->string('ktp_pemohon_path')->nullable();
                $table->string('ktp_pemberi_kuasa_path')->nullable();
                $table->string('dokumen_pendukung_path')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemohons');
    }
};
