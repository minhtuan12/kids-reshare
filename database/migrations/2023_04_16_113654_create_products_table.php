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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prod_name');
            $table->unsignedInteger('category_id');
            $table->string('descr')->nullable();
            $table->timestamp('buy_date');
            $table->integer('size');
            $table->boolean('condition')->nullable();
            $table->string('material')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
