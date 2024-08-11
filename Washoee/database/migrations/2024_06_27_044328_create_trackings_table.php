<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id('tracking_id');
            $table->string('tracking_number')->unique();
            $table->enum('status', ['processing', 'shipped', 'delivered', 'cancelled'])->default('processing');
            $table->timestamps();
            $table->unsignedBigInteger('payment_id');

            // Define foreign key constraint
            $table->foreign('payment_id')->references('payment_id')->on('payments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trackings');
    }
}

