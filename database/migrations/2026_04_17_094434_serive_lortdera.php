<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('service_orders', function (Blueprint $table) {
        $table->id()->autoIncrement();
        $table->foreignId('user_id')->constrained('users')->references('id')->on('users');
        $table->foreignId('service_orders_id')->constrained('service_orders')->references('id')->on('service_orders');
        $table->foreignId('service_id')->constrained('services')->references('id')->on('services');
        $table->foreignId('contractors_id')->constrained('contractors')->references('id')->on('contractors');
        $table->date('date_of_service')->nullable();
        $table->string('problemReport')->nullable();
        $table->string('postMortem')->nullable();
        $table->string('notes')->nullable();
        $table->string('status')->default('pending');
        $table->string('pictures')->nullable();
        $table->integer('hoursWorked')->nullable();
        $table->decimal('hourlyRate',10,2)->nullable();
        $table->decimal('totalAmount',10,2)->nullable();
        $table->timestamps();
        $table->softDeletes();

    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('service_orders');
}
};
