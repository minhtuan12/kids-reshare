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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('prod_name');
            $table->string('descr')->nullable();
            $table->timestamp('buy_date')->nullable();
            $table->boolean('condition')->nullable();
            $table->string('material')->nullable();
            $table->string('color')->nullable();
            $table->integer('size')->nullable();
            $table->tinyInteger('upload')->nullable();
            $table->string('img');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');;
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
