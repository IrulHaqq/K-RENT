<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('kendaraan_id')->constrained()->onDelete('cascade');
            $table->integer('duration');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('quantity');
            $table->text('additional_info')->nullable();
            $table->decimal('total_cost', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
