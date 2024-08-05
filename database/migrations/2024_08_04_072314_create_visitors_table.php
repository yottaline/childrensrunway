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
        Schema::create('visitors', function (Blueprint $table) {
            $table->integer('visitor_id', true, true);
            $table->string('visitor_name', 120);
            $table->string('visitor_email', 255)->unique();
            $table->boolean('visitor_approved')->default('0');
            $table->string('visitor_qr_code')->nullable();
            $table->dateTime('visitor_expiry')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};