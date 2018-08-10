<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('item')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('product_name')->nullable();
            $table->text('product_price')->nullable();
            $table->text('details')->nullable();
            $table->string('img')->nullable();
            $table->string('product_stock')->nullable();
            $table->string('red')->nullable();
            $table->string('green')->nullable();
            $table->string('blue')->nullable();
            $table->string('black')->nullable();
            $table->string('pink')->nullable();
            $table->string('purple')->nullable();
            $table->string('orange')->nullable();
            $table->string('white')->nullable();
            $table->string('yellow')->nullable();
            $table->string('xsmall')->nullable();
            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
            $table->string('elarge')->nullable();
            $table->string('s28')->nullable();
            $table->string('s29')->nullable();
            $table->string('s30')->nullable();
            $table->string('s31')->nullable();
            $table->string('s32')->nullable();
            $table->string('featured')->nullable();
            $table->string('new')->nullable();
            $table->string('popular')->nullable();
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
