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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Konghucu', 'Buddha', 'Katolik', 'Hindu']);
            $table->enum('status',['Menikah', 'Belum Menikah']);
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
