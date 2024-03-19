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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // Add first name column
            $table->string('last_name');  // Add last name column
            $table->string('email');
            $table->string('password');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // You might want to drop the new columns in the reverse migration if needed
        Schema::dropIfExists('customers');
    }
};
