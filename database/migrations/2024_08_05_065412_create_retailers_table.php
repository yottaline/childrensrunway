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
        Schema::create('retailers', function (Blueprint $table) {
            $table->integer('retailer_id', true, true);
            $table->string('retailer_f_name', 64);
            $table->string('retailer_l_name', 64);
            $table->string('retailer_email', 24)->unique();
            $table->string('retailer_phone');
            $table->boolean('retailer_approved')->default('0');
            $table->string('retailer_company', 64);
            $table->string('retailer_city', 64);
            $table->string('retailer_country', 64);
            $table->string('retailer_address', 64);
            $table->string('retailer_created');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retailers');
    }
};