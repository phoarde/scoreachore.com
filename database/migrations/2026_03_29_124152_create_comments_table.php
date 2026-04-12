<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('contractors_id')->nullable();
            $table->foreignId('service_id')->nullable();
            $table->foreignId('service_orders_id')->nullable();
            $table->string('title')->nullable();
            $table->string('comment');
            $table->date('date_of_service');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
