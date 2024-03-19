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
        Schema::create('purchaseDetails', function (Blueprint $table){
            $table->id();
            $table->string('car_model');
            $table->string('car_color');
            $table->string('car_price');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('contact_number');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
