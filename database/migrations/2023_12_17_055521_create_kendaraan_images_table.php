<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanImagesTable extends Migration
{
    public function up()
    {
        Schema::create('kendaraan_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id')->constrained()->onDelete('cascade');
            $table->binary('image_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kendaraan_images');
    }
}
