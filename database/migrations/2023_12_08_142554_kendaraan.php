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
        //
        Schema::create('Kendaraans', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('Tipe_Kendaraan');
            $table->string('Nama_Kendaraan');
            $table->double('Harga_Kendaraan');
            $table->integer('Jumlah_Kendaraan');
            $table->text('Deskripsi_Kendaraan');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Kendaraans');
    }
};
