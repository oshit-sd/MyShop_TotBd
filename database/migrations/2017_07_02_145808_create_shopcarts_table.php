<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopcarts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id')->nullable();
            $table->string('pro_id')->nullable();
            $table->string('pro_name')->nullable();
            $table->string('pro_price')->nullable();
            $table->string('total')->nullable();
            $table->string('quantity')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('pending')->default(0);
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
        Schema::dropIfExists('shopcarts');
    }
}
