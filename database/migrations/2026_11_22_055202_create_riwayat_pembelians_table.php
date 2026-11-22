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
        Schema::create('riwayat_pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembeli_id')->constrained()->cascadeOnDelete();     
            $table->string('judul_game');    
            $table->string('jenis');          
            $table->date('tanggal');          
            $table->integer('total_bayar');   
            $table->string('metode');        
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pembelians');
    }
};
