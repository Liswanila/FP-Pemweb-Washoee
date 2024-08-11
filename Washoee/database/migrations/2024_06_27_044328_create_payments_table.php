<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->string('name');
            $table->string('email_address');
            $table->string('address');
            $table->string('card_number');
            $table->string('expiry_date');
            $table->string('cvc');
            $table->string('selected_plan');
            $table->timestamps();
            $table->unsignedBigInteger('service_id');

            // Define foreign key constraint
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
