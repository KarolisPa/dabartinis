<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 90);
            $table->string('about', 255);
            $table->string('unit_of_measurement', 5);
            $table->string('category');
            $table->string('model');
            $table->double('price', 6, 2);
            $table->string('photo', 255);
            $table->double('discount_price', 6, 2)->nullable();
            $table->boolean('discount_status')->default(false);
            $table->date('discount_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
