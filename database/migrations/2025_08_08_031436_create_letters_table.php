<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // defines what happens when you run the migration (creating the table)
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // the letter to Jesus
            $table->string('sender')->nullable(); // optional sender name
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
