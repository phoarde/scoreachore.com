<?php

namespace App;

class Revioews
{public function up(): void
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable();
        $table->foreignId('service_orders_id')->nullable();
        $table->foreignId('contractors_id')->nullable();
        $table->foreignId('service_id')->nullable();
        $table->string('title')->nullable();
        $table->boolean('shoeName')->default(false);
        $table->string('review')->nullable();
        $table->integer('stars')->nullable();
        $table->string('pictures')->nullable();
        $table->timestamps();
    });
}
