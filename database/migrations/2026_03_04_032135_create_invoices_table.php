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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id')->constrained('contractors')->onDelete('cascade');
            $table->dateTime('invoice_date')->nullable();
            $table->string('status')->default('pending');
            $table->string('service')->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_description')->nullable();
            $table->string('service_location')->nullable();
            $table->string('service_address')->nullable();
            $table->string('service_city')->nullable();
            $table->string('service_state')->nullable();
            $table->string('service_zip')->nullable();
            $table->string('service_country')->nullable();
            $table->string('service_notes')->nullable();
            $table->string('service_image')->nullable();
            $table->decimal('hourly_rate',10,2)->nullable();
            $table->decimal('base_rate',10,2)->nullable();
            $table->decimal('service_fees',10,2)->nullable();
            $table->decimal('service_total',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
